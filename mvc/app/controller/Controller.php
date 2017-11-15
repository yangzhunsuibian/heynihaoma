<?php
namespace Controller;
use Framework\Tpl;
class Controller extends Tpl
{
	public function __construct()
	{
		parent::__construct($GLOBALS['config']['TPL_CACHE_DIR'] , $GLOBALS['config']['TPL_DIR'] , $GLOBALS['config']['TPL_LIFETIME']);
	}
	
	public function display($filePath = null , $isExecute = true)
	{
		if (empty($filePath)) {
			$filePath = $_GET['m'] . '/' . $_GET['a'] . '.html';
		}
		
		parent::display($filePath , $isExecute);
	}
}