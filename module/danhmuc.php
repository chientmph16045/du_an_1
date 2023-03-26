<?php

function insert($danhmuc)
{
    $sql = "INSERT INTO `category`(`name`) values ('$danhmuc') ";
    pdo_execute($sql);
}
function list_dm()
{
    $sql = "SELECT * FROM `category`";
    $listdm = pdo_query($sql);
    return $listdm;
}
<<<<<<< HEAD

function load_one_dm($id)
{
    $sql = "SELECT * FROM `category` WHERE idCate = " . $_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_dm($id, $danhmuc)
{
    $sql = "UPDATE `category` set `name`='" . $danhmuc . "' WHERE `idCate`=" . $id;
    pdo_execute($sql);
}
function delete_dm($id)
{
    $sql = "DELETE FROM `category` WHERE idCate = " . $_GET['id'];
}
=======
function load_one_dm($id){
    $sql = "SELECT * FROM `category` WHERE idCategory = ".$_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_dm($id,$danhmuc){
    $sql = "UPDATE `category` set `name`='".$danhmuc."' WHERE `idCategory`=".$id;
    pdo_execute($sql);
}
function delete_dm($id){
    $sql = "DELETE FROM `category` WHERE idCategory = " . $_GET['id'];
    pdo_execute($sql);
}
>>>>>>> fac028f7134865a25ff3b71e8892a3467ffcd256
