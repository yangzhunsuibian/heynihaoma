<?php
//普通工厂
class Fly
{
	public function create()
	{
		
		echo '飞机被造出来了<br />';
	}
}

class DaPao
{
	public function create()
	{
		
		echo '大炮被造出来了<br />';
	}
	
}

class Factory
{
	
	public static function create($type)
	{
		
		return new $type();
		
	}	
	
}


$factory = Factory::create('Fly');
$factory->create();





