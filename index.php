<?php
include './shop-leftsidebar.php';
include "./module/pdo.php";
include "./module/sanpham.php";
include "./module/danhmuc.php";
if (isset($_GET['act']) && ($_GET['act']) !== "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            include './page/home.php';
            break;
        case 'shop':
            $listdm = list_dm();
            include './shop-leftsidebar.php';
            break;
        case 'blog':
            include './page/blog.php';
            break;
        case 'contact':
            include './page/contact.php';
            break;
    }
}
