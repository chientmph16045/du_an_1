<?php 

function checkuser($email,$pass){
    $sql = "SELECT * FROM `user` where `email`='".$email."' and `password`='".$pass ."'";
    $acc = pdo_query_one($sql);
    return $acc;
}

?>