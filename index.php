<?php
session_start();

include "module/pdo.php";
include "module/danhmuc.php";
include "module/sanpham.php";
include "module/taikhoan.php";

include "page/header.php";

// khai báo biến để hứng hàm funtion bên module
$loadtop10=loadTop10();

$loadall_sp=loadall_sp();

$listdm=list_dm();

$loadall_size=loadall_size();

if (isset($_GET['sp'])) {
    $sp=$_GET['sp'];
    

    switch ($sp) {
        case 'shop-leftsidebar':

            include "page/shop-leftsidebar.php";
            break;
        
        default:
            
            break;
    }
} else {
    include "page/home.php";
}
include "page/footer.php";