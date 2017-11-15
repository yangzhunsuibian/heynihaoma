<?php
//标准工厂
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
class WuqiFactory
{
	public $obj;
	
	public function __construct($type)
	{
		$this->obj = new $type();
	}
	
	public function make()
	{
		return $this->obj;
	}
}

$factory = new WuqiFactory('Fly');

$fly = $factory->make();
$fly->create();







