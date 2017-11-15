<?php
//工厂方法
//把工厂给接口化
interface Wuqi
{
	public function create();
}
class Fly implements Wuqi
{
	public function create()
	{
		echo '飞机被造出来了';
	}
}
class DaPao implements Wuqi
{
	
	public function create()
	{
		echo '大炮被造出来了';
	}
}
interface Factory
{
	public function make();
}

class FlyFactory implements Factory
{
	public function make()
	{
		return new Fly();
	}
}

class DaPaoFactory implements Factory
{
	public function make()
	{
		return new DaPao();
	}
}
$factory = new FlyFactory();
$fly = $factory->make();
$fly->create();








