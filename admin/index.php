<?php
include '../module/pdo.php';
include "./header.php";

if(isset($_GET['sp'])){
    $sp = $_GET['sp'];
    switch($sp){
        case 'list_dm':{
            include_once './danhmuc/list.php';
            break;
        }
        case 'new_dm':{

            include_once './danhmuc/add.php';
            break;
        }
    }
}else{
    include "./home.php";
}

include "./footer.php";
?>