<?php
include './page/header.php';
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
            if (isset($_GET['idCate']) && ($_GET['idCate']) > 0) {
                $idCate = $_GET['idCate'];
            } else {
                $idCate = 0;
            }
            $loadsp = list_sp($idCate);
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
