<?php

function insert_sp($name, $price, $image, $description, $quantity, $idCategory)
{
    $sql = "INSERT INTO `product`(`name`,`price`,`image`,`description`,`quantity`,`idCate`) values ('$name','$price','$image','$description','$quantity','$idCategory') ";
    pdo_execute($sql);
}

function list_sp(){
    $sql = "SELECT * FROM `product`";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_one_sp($id){
    $sql = "SELECT * FROM `product` WHERE idProduct = ".$_GET['id'];
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_one_list_sp_same($sp){
    $sql = "SELECT * FROM `product` WHERE idCate = ".$sp;
    $sp = pdo_query($sql);
    return $sp;
}
function update_sp($id,$name, $price, $image, $description, $quantity, $idCate){
    if($image != ''){
    $sql = "UPDATE `product` set `name`='".$name."', `price`='".$price."',`image`='".$image."',`description`='".$description."',`quantity`='".$quantity."',`idCate`='".$idCate."' WHERE `product`.`idProduct`=".$id;
    }else{
    $sql = "UPDATE `product` set `name`='".$name."', `price`='".$price."',`description`='".$description."',`quantity`='".$quantity."',`idCate`='".$idCate."' WHERE `product`.`idProduct`=".$id;
    }
    pdo_execute($sql);
}
function delete_sp($id){
    $sql = "DELETE FROM `product` WHERE idProduct = " . $_GET['id'];
    pdo_execute($sql);
}