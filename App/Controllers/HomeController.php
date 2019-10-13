<?php


namespace App\Controllers;
//use App\Lib;


class HomeController extends BaseController
{
    public function __construct()
    {
        $this->template = "home.tpl.php";
        //$a = new  \App\Lib\ClassA (10);

		$this->data["header"]["pagetitle"] = " Домашнаяя страница ";
		// Формирую поток данных на вывод
		$this->data["footer"]["vardump"]["get"] = $_GET;


    }

}