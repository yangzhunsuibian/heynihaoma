<?php
//单例设计模式
class Single
{
	public static $instance;
	
	private function __construct()
	{
		$link = mysqli_connect('localhost' , 'root' , 'kungezuishuai');
		return $link;
	}
	
	public static function getInstance()
	{
		if (isset(self::$instance)) {
			return self::$instance;
		} else {
			return self::$instance = new self();
		}
	}
}
$obj1 = Single::getInstance();
$obj2 = Single::getInstance();

if ($obj1 === $obj2) {
	echo '相同';
} else {
	echo '不相同';
}




