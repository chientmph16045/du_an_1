<?php 
include_once './page/header.php';


if (isset($_GET['sp'])) {
    $sp = $_GET['sp'];
    switch ($sp) {
    case 'login':
        include './page/login_resign.php';
        break;
       
}}
else{
    include_once './page/home.php'; 
}
include_once './page/footer.php';
