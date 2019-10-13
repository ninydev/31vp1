<?php
class Config
{
    // Подключение к базе данных
    static $DB_HOST = "localhost";
    static $DB_PORT = "3306";
    static $DB_USER = "c1laravel";
    static $DB_PSWD = "QweAsdZxc!23";
    static $DB_NAME = "c131vp1";

}

$mysqli = new mysqli(
        Config::$DB_HOST . ':' . Config::$DB_PORT,
        Config::$DB_USER, Config::$DB_PSWD,
        Config::$DB_NAME);

/*
 * Это "официальный" объектно-ориентированный способ сделать это
 * однако $connect_error не работал вплоть до версий PHP 5.2.9 и 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

/*
 * Если нужно быть уверенным в совместимости с версиями до 5.2.9,
 * лучше использовать такой код
 */
if (mysqli_connect_error()) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

echo 'Соединение установлено... ' . $mysqli->host_info . "\n <br><br>";


$result = $mysqli->query("SELECT * FROM `users`");

var_dump ($result);

echo "<table style='border: 1px solid red;'>";
if($result) {
    // Cycle through results
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row ['id'] . "</td>";
        echo "<td>" . $row ['email'] . "</td>";

        echo "</tr>";
       //var_dump( $row) ;

    }
}

echo "</table>";