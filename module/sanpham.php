<?php

function insert_sp($name, $price, $image, $description, $quantity, $idCategory)
{
    $sql = "INSERT INTO `product`(`name`,`price`,`image`,`description`,`quantity`,`idCategory`) values ('$name','$price','$image','$description','$quantity','$idCategory') ";
    pdo_execute($sql);
}

function list_sp(){
    $sql = "SELECT * FROM `product`";
    $listsp = pdo_query($sql);
    return $listsp;
}