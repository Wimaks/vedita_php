<?php
$hostname = "127.0.0.1"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя
$password = "root"; // пароль пользователя
$dbName = "vedita"; // название базы данных

/* Создаем соединение */
$mysqli = new mysqli($hostname, $username, $password, $dbName);
$mysqli->query('SET NAMES utf8') or header('Location: Error');

/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
// mysql_select_db($dbName) or die (mysql_error());
?>