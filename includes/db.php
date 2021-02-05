<?php
$hostname = "127.0.0.1"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя
$password = "root"; // пароль пользователя
$dbName = "products"; // название базы данных

/* Создаем соединение */
$mysqli = new mysqli($hostname, $username, $password, $dbName);
// $link = mysqli_connect($hostname, $username, $password) or die ("Не могу создать соединение");
$mysqli->query('SET NAMES utf8') or header('Location: Error');

// /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
// mysqli_select_db($link, $dbName) or die (mysqli_error($link));
?>