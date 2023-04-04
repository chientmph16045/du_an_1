<?php
session_start();
include_once './module/db.php';
include_once './page/header.php';
include_once './module/pdo.php';
include_once  './module/danhmuc.php';
include_once  './module/sanpham.php';
include_once './module/taikhoan.php';
include_once './module/banner.php';
include_once './module/content.php';

include "page/header.php";

// khai báo biến để hứng hàm funtion bên module
$loadtop10=loadTop10();

$loadsale=load_sale_sp();

$load_quantity=load_quantity_sp();

$loadsale3=load_sale_sp3();
            
$loadall_sp=loadall_sp();

$listdm=list_dm();

$loadbanner=list_banner();

$loadcontent=list_content();

$loadall_size=loadall_size();   


if (isset($_GET['sp'])) {
    $sp = $_GET['sp'];
    switch ($sp) {


        //login && resign && logout
        case 'login_resign':
            include 'page/login_resign.php';
            break;
        case 'login':
            if (isset($_POST['login'])){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $login = checkuser($email,$pass);
                if(is_array($login)){
                    $_SESSION['user'] = $login;
                    $yourURL = "index.php";
                    echo ("<script>location.href =' $yourURL '</script>");
                }else{
                    $thongbaoerro = 'Sai tài khoản hoặc mật khẩu';
                    include 'page/login_resign.php';
                }
            }
            break; 
        case 'resign':
            if(isset($_POST['resign'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insertAcc($name, $email, $pass);
                $thongbaodangki = "Đăng kí thành công";
            }
            include 'page/login_resign.php';
            break;
        case 'forget' :
            if(isset($_POST['forget'])){
                $email =$_POST['email'];
                $check = checkforget($email);
                if(is_array($check)){
                    extract($check);
                    $thongbao  = "Mật khẩu của bạn là ".$password;
                }else{
                    $thongbao ='Email không chính xác';
                }
            }
            include 'page/forget.php';
            break;   
        case 'logout':
                session_destroy();
                $yourURL = "index.php";
                echo ("<script>location.href =' $yourURL '</script>");
                break;

        case 'shop-leftsidebar':

            include "page/shop-leftsidebar.php";
            break;
            
 
    }
} else {
    include_once './page/home.php';
}
include_once './page/footer.php';

