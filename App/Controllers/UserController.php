<?php


namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->template = "user.tpl.php";
		$this->data["header"]["pagetitle"] = " Работа с пользователями ";
		//$this->data["content"] = " Информация о пользователях ";
        $this->getAll();
    }

    public  function getAll(){
        $Users = new User();
        $this->data["content"] = $Users->All();
    }

}