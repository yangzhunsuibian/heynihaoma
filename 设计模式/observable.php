<?php
//观察者设计模式
//观察者和被观察者，做出来的动作或者是反应
interface Observales
{
	//添加观察者
	public function attach($observer);
	//移出来被观察者
	public function detach($observer);
	
	//消息
	public function notify();
}
class Boss implements Observales
{
	
	//实现添加被观察者
	public $observales = [];
	//定义一个价格
	public $price = 10;
	
	//添加被观察者
	public function attach($observer)
	{
		if(!in_array($observer , $this->observales)) {
			$this->observales[] = $observer;
		}
	}
	//移出被观察者
	public function detach($observer)
	{
		foreach ($this->observales as $key=>$val) {
			if ($val == $observer) {
				unset($this->observales[$key]);
			}
		}
		
	}
	
	//消息
	public function notify()
	{
		foreach ($this->observales as $abserver) {
			$abserver->do($this);
		}
	}
	
	//改变价格
	public function changePrice($price)
	{
		$this->price = $price;
		$this->notify();
	}
	
}
//观察者接口
interface Observer
{
	public function do($observales);
}

//穷人
class Poor implements Observer
{
	public function do($observales)
	{
		if ($observales->price > 20) {
			echo '太贵了吃不起我是穷人<br />';
		} else {
			echo '太贵了但是该吃还是要吃的<br />';
		}
	}
}
//富人
class Rich implements Observer
{
	public function do($observales)
	{
		if ($observales->price > 20) {
			echo '凑合着吃吧还行不算贵<br />';
		} else {
			echo '太便宜了了垃圾<br />';
		}
	}
}




$boss = new Boss();
$rich = new Rich();
$boss->attach($rich);

$poor = new Poor();
$boss->attach($poor);

$boss->changePrice(20);







