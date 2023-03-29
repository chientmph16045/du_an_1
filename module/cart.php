<?php

function insert_bill($name, $address, $phone, $date)
{
    $sql = "INSERT INTO `placinganorder`(`name`,`address`,`phone`,`dateOder`) values ('$name', '$address','$phone', '$date')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($idUser,$idsp,$quantity,$tt,$idbill)
{
    $sql = "INSERT INTO `cart`(`idUser`,`idsp`,`quantity`,`tinhtrang`,`idOrder`) values
('$idUser','$idsp','$quantity','$tt','$idbill')";
    return pdo_execute($sql);
}
function order($id){
    $sql = "SELECT * FROM cart where idOrder =".$id;
    $listod = pdo_query($sql);
    return $listod;
}
function bill($id){
    $sql = "SELECT * FROM `placinganorder` where idOder =".$id;
    $listdm = pdo_query($sql);
    return $listdm;
}
?>