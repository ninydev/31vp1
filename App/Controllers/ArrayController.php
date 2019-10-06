<?php


namespace App\Controllers;


class ArrayController extends BaseController
{
    public function __construct()
    {
        $this->template = "array.tpl.php";
		$this->data["header"]["pagetitle"] = " Пример работы с массивами ";
		
		$this->data["content"] = $_GET;
		
		// Формирую поток данных на вывод
		// $this->data["footer"]["vardump"]["get"] = $_GET;
    }

}