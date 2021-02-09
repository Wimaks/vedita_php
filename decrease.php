<?php
    include "includes/db.php"; //Подключаем БД
    $query = "UPDATE `products` SET product_quantity = product_quantity - 1  WHERE `products`.`ID` = ".$_REQUEST['id']."";
    $result = $mysqli->query($query) or die($mysql->error);
?>