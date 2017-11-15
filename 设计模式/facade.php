<?php
//门面设计模式
//定义一个静态方法来完成一些复杂的功能调用
class Duck
{
	public function kill()
	{
		echo '第一步傻鸭子<br />';
	}
	public function bamao()
	{
		echo '第二步把鸭毛<br />';
	}
	public function xiaguo()
	{
		echo '第三步下锅吃<br />';
	}
}

class FacadeDuck
{
	public static function make()
	{
		
		$duck = new Duck();
		$duck->kill();
		$duck->bamao();
		$duck->xiaguo();
	}
}
FacadeDuck::make();



