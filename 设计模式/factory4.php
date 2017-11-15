<?php
//抽象工厂
interface Wuqi
{
	public function create();
}
class BigFly implements Wuqi
{
	public function create()
	{
		echo "大飞机被造出来了";
	}
}
class SmallFly implements Wuqi
{
	public function create()
	{
		echo "小飞机被造出来了";
	}
}
interface Factory
{
	public function FlyBig();
	public function FlySmall();
}

class FlyFactory implements Factory
{
	public function FlyBig()
	{
		return new BigFly();
	}
	public function FlySmall()
	{
		return new SmallFly();
	}
}

$factory = new FlyFactory();
//$fly = $factory->FlySmall();
$fly = $factory->FlyBig();
$fly->create();


















