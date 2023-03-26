<?php

function checkuser($email, $pass)
{
    $sql = "SELECT * FROM `user` where `email`='" . $email . "' and `password`='" . $pass . "'";
    $acc = pdo_query_one($sql);
    return $acc;
}
function list_user(){
    $sql = "SELECT * FROM `user`";
    $listuser=pdo_query($sql);
    return $listuser;
}
function insert_user($name,$role,$email,$phone,$password,$address){
    $sql = "INSERT INTO `user`(`name`,`role`,`email`,`phone`,`password`,`address`) value('$name','$role','$email','$phone','$password','$address')";
    pdo_execute($sql);
}


function checkforget($email)
{
    $sql = "SELECT * FROM `user` where `email`='" . $email . "'";
    $acc = pdo_query_one($sql);
    return $acc;
}


function insertAcc($name, $email, $pass)
{
    $sql = "INSERT INTO `user`(`name`,`email`,`password`) values ('$name','$email','$pass') ";
    pdo_execute($sql);
}

function list_one_user($id){
    $sql = "SELECT * FROM `user` WHERE idUser = ".$_GET['id'];
    $user = pdo_query_one($sql);
    return $user;
}
function  update_user($id,$name,$role,$email,$phone,$password,$address){
    $sql = "UPDATE `user` set `name`='".$name."', `role`='".$role."',`email`='".$email."',`phone`='".$phone."',`password`='".$password."',`address`='".$address."' WHERE `user`.`idUser`=".$id;
    pdo_execute($sql);
}
function delete_user($id){
    $sql = "DELETE FROM `user` WHERE idUser = " . $_GET['id'];
    pdo_execute($sql);
}

?>