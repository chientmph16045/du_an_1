<?php
include '../module/pdo.php';
include "./header.php";

if(isset($_GET['sp'])){
    $sp = $_GET['sp'];
    switch($sp)  {
        case '':
    }
}else{
    include "./home.php";
}

include "./footer.php";
?>