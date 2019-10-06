<?php


namespace App\Controllers;


class HomeController extends BaseController
{
    public function __construct()
    {
        $this->template = "home.tpl.php";
		$this->data["header"]["pagetitle"] = " Домашнаяя страница ";
		// Формирую поток данных на вывод
		$this->data["footer"]["vardump"]["get"] = $_GET;
    }

}