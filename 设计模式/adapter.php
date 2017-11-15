<?php
//适配器
//解决类似的功能，使用方法不一致的时候
//数据库 mysql orcale sqlserver
class MysqlDb
{
	public function connect()
	{
		echo '我是mysql数据库链接的方法<br />';
	}
	public function select()
	{
		echo '我是mysql查询方法<br />';
	}
}
class Sqllite
{
	public function find()
	{
		echo '我是sqllite查询方法<br />';
	}
}
class  Oracle 
{
	
	public function init()
	{
		echo '我是oracle的初始化方法<br />';
	}
	public function connect()
	{
		echo '我是or的链接方法<br />';
	}
	public function pre()
	{
		echo '我是or的预处理方法<br />';
	}
	public function select()
	{
		echo '我是or的查询方法<br />';
	}
}
interface Db
{
	public function select();
	public function connect();
}


class MysqlAdapter extends MysqlDb implements Db
{
	public function connect()
	{
		parent::connect();
	}
	public function select()
	{
		parent::select();
	}
}
class SqlliteAdapter extends Sqllite implements Db
{
	public function connect()
	{
		
	}
	public function select()
	{
		parent::find();
	}
}
class OracleAdapter extends Oracle implements Db
{
	public function connect()
	{
		parent::init();
		parent::connect();
	}
	public function select()
	{
		parent::pre();
		parent::select();
	}
}



define('DB_TYPE' , 'Mysql');
$dbtype = DB_TYPE.'Adapter';
$db = new $dbtype();
$db->select();















