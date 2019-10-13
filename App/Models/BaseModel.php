<?php
namespace App\Models;

use App\Config;

class BaseModel
{
    var $table=""; // Таблица с данными
    static $mysqli; // База данных


    function Query($str) {
        echo "SQL Send: " . $str . "<br>";
        return self::$mysqli->query ($str);
    }

    public function All (){
        return $this->Query("SELECT * FROM " . $this->table);
    }

}

// Выполнит подключение к базе данных 1 раз
// При первом обращении к этому файлу
BaseModel::$mysqli = new \mysqli(
    Config::$DB_HOST . ':' . Config::$DB_PORT,
    Config::$DB_USER, Config::$DB_PSWD,
    Config::$DB_NAME);

if (BaseModel::$mysqli->connect_error) {
    die('Ошибка подключения (' . BaseModel::$mysqli->connect_errno . ') ' . BaseModel::$mysqli->connect_error);
}