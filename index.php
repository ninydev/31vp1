<?php
require_once ("vendor/autoload.php");

$Router = new App\Router();
$Controller = $Router->getController();

echo $Controller->view();
