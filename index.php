<?php
session_start();
<<<<<<< HEAD

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
=======
include_once './page/header.php';
include_once './module/pdo.php';
include_once './module/taikhoan.php';

if (isset($_GET['sp'])) {
    $sp = $_GET['sp'];
    switch ($sp) {


        //login && resign && logout
        case 'login_resign':
            include './page/login_resign.php';
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
                    include './page/login_resign.php';
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
            include './page/login_resign.php';
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
            include './page/forget.php';
            break;   
        case 'logout':
                session_destroy();
                $yourURL = "index.php";
                echo ("<script>location.href =' $yourURL '</script>");
                break;
    }
} else {
    include_once './page/home.php';
}
include_once './page/footer.php';
>>>>>>> c9744879834ee5602302f1dba87b23088f768307
