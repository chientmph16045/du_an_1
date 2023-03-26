
<?php
session_start();
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
        case 'chitiet':
            include './page/single-product.php';
            break;    
        case 'account':
            include './page/my-account.php';
            break;  
            case 'account_fix':
                if(isset($_POST['update']))
                include './page/my-account.php';
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
