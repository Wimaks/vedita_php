<?php
    include "includes/db.php"; //Подключаем БД
    //делаем запрос на товары этой категории
    $query = "UPDATE `products` SET `IS_HIDE` = '1' WHERE `products`.`ID` = ".$_REQUEST['id']."";
    $result = $mysqli->query($query) or die($mysql->error);
?>