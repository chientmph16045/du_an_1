<?php

function checkuser($email, $pass)
{
    $sql = "SELECT * FROM `user` where `email`='" . $email . "' and `password`='" . $pass . "'";
    $acc = pdo_query_one($sql);
    return $acc;
}



function insertAcc($name, $email, $pass)
{
    $sql = "INSERT INTO `user`(`name`,`email`,`password`) values ('$name','$email','$pass') ";
    pdo_execute($sql);
}

?>