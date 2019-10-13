<?php


namespace App;


use App\Controllers\ArrayController;

class Router
{
    public function __construct()
    {
        // echo "Router is start";
		//var_dump($_REQUEST);
    }

    public function getController(){
		if (!isset($_REQUEST["controller"]))
			return new Controllers\HomeController();
		
		//https://www.php.net/manual/ru/control-structures.switch.php
		switch($_REQUEST["controller"]) {
			case "user":
				return new Controllers\UserController();			
			case "array":
				return new Controllers\ArrayController();
            case "contacts":
                return new Controllers\ContactController();
            default:
				return new Controllers\HomeController();
		}
		
    }
}