<?php


namespace App\Controllers;


class UserController extends BaseController
{
    public function __construct()
    {
        $this->template = "user.tpl.php";
		$this->data["header"]["pagetitle"] = " Работа с пользователями ";
		$this->data["content"] = " Информация о пользователях ";
		
    }

}