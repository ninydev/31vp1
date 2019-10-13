<?php


namespace App\Lib;

echo "Подключился файл с описанием клсса А";

class ClassA
{
    public function __construct( $c)
    {
        echo "Создан класс А" . $c;
    }
}