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
function insert_user($name,$phone,$email,$password,$address){
    $sql = "INSERT INTO `user`(`nameUser`,`phone`,`email`,`password`,`address`) value('$name','$phone','$email','$password','$address')";
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
    $sql = "INSERT INTO `user`(`nameUser`,`email`,`password`) values ('$name','$email','$pass') ";
    pdo_execute($sql);
}

function list_one_user($id){
    $sql = "SELECT * FROM `user` WHERE idUser = ".$_GET['id'];
    $user = pdo_query_one($sql);
    return $user;
}
function update_user($id,$name, $phone, $email, $password, $address){
    $sql = "UPDATE `user` set `nameUser`='".$name."', `phone`='".$phone."',`email`='".$email."',`password`='".$password."',`address`='".$address."' WHERE `user`.`idUser`=".$id;
    pdo_execute($sql);
}
function update_user_now($id,$name,$address,$phone,$pass){
    $sql = "UPDATE `user` set `nameUser`='".$name."', `address`='".$address."',`phone`='".$phone."',`password`='".$pass."' WHERE `user`.`idUser`=".$id;
    pdo_execute($sql);
}

function delete_user($id){
    $sql = "DELETE FROM `user` WHERE idUser = " . $_GET['id'];
    pdo_execute($sql);
}

?>