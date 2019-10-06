<?php


namespace App\Controllers;


class BaseController
{
    var $data; // массив для вывода на экран
	var $template = "home.tpl.php"; // Шаблон отображения


    /**
     * Построит результат работы контроллера
     */
    public function view(){
		ob_start();
		require_once(__DIR__ . "/../../views/" . $this->template);
		return ob_get_clean();
    }

}