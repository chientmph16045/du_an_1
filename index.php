<?php
include './page/header.php';
include "./module/pdo.php";
include "./module/sanpham.php";
include "./module/danhmuc.php";
if (isset($_GET['act']) && ($_GET['act']) !== "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            include './page/index.php';
            break;
        case 'shop':
            if (isset($_GET['kyw']))
                $loadsp = list_sp();
            $listdm = list_dm();
            include './page/shop-leftsidebar.php';
            break;
        case 'blog':
            include './page/blog.php';
            break;
        case 'contact':
            include './page/contact.php';
            break;
        default:
            include './page/home.php';
            break;
    }
} else {
    include './page/home.php';
}
include './page/footer.php';
