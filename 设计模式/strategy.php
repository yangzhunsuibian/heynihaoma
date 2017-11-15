<?php
//策略
//你实现什么功能干什么活，用什么策略(方式，方法)
class Travel
{
	public $tool;
	
	public function __construct($tool)
	{
		$this->tool = $tool;
	}
	
	public function arrive()
	{
		echo '谭江华要'.$this->tool->go().'去西天去死';
	}
}

interface Tool
{
	public function go();
}

class Fly implements Tool
{
	public function go()
	{
		echo '我要坐着飞机去';
	}
}
class Bike implements Tool
{
	public function go()
	{
		echo '我要骑着膜拜去';
	}
}

$travel = new Travel(new Fly());

$travel->arrive();














