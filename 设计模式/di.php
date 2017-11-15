<?php
//依赖，注入，翻转控制
//就是你想是想一个功能的时候，需要用到其他方法 传一个对象进来

class Son
{
	public function cry(Father $father)
	{
		echo '哈哈哈！！！！';
		
		$father->baobao();
	}
	
}
class Father
{
	public function baobao()
	{
		echo '乖乖别哭，爸爸抱抱带去找谭江华';
	}
}
class Mother
{
	public function baobao()
	{
		echo '乖乖别哭，妈妈抱抱带去找谭江华';
	}
}
$baby = new Son();
$mama = new Mother();
$baba = new Father();
$baby->cry($baba);











