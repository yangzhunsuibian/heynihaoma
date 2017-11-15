<?php
//容器
//利用静态的类实现创建对象
class Container
{
	public static $register = [];
	
	public static function bind($name , closure $closure)
	{
		if (!isset(self::$register[$name])) {
			self::$register[$name] = $closure;
		}
	}
	
	public static function make($name)
	{
		
		$func = self::$register[$name];
		return $func();
	}
}
class Person
{
	public function say()
	{
		echo '我是唐江华我不是人我是人渣';
	}
}

Container::bind('person' , function(){
	return new Person();
});


$obj = Container::make('person');
$obj->say();












