<?php
namespace Controller;
use Controller\Controller;
use Model\UserModel;

class UserController extends Controller
{
	public function login()
	{
		$this->assign('title' , '我是标题');
		$this->display();
	}
}


