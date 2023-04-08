<?php

session_start();
include_once './page/header.php';
include_once './module/pdo.php';
include_once './module/taikhoan.php';
include "./module/sanpham.php";
include "./module/danhmuc.php";
include './module/cart.php';

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
if (isset($_GET['sp'])) {
    $sp = $_GET['sp'];
    switch ($sp) {


            //login && resign && logout
        case 'login_resign':
            include './page/login_resign.php';
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $login = checkuser($email, $pass);
                if (is_array($login)) {

                    $_SESSION['user'] = $login;
                    if ($_SESSION['user']['address'] == '') {
                        $yourURL = "index.php?sp=account";
                        echo ("<script>location.href =' $yourURL '</script>");
                    } else {
                        $yourURL = "index.php";
                        echo ("<script>location.href =' $yourURL '</script>");
                    }


                } else {
                    $thongbaoerro = 'Sai tài khoản hoặc mật khẩu';
                    include './page/login_resign.php';
                }
            }
            break;
        case 'account_fix':
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                update_user_now($id, $name, $address, $phone, $pass);
                unset($_SESSION['user']);
                $new = checkuser($email, $pass);
            }
            $_SESSION['user'] = $new;
            $thongbao = "Cập nhật thông tin tài khoản thành công";
            $id = $_SESSION['user']['idUser'];
            $listsp = order($id);
            include './page/my-account.php';
            break;
        case 'resign':
            if (isset($_POST['resign'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insertAcc($name, $email, $pass);
                $thongbaodangki = "Đăng kí thành công";
            }
            include './page/login_resign.php';
            break;
        case 'forget':
            if (isset($_POST['forget'])) {
                $email = $_POST['email'];
                $check = checkforget($email);
                if (is_array($check)) {
                    extract($check);
                    $thongbao = "Mật khẩu của bạn là " . $password;
                } else {
                    $thongbao = 'Email không chính xác';
                }
            }
            include './page/forget.php';
            break;

        case 'account':
            $id = $_SESSION['user']['idUser'];
            $listsp = order($id);

            include './page/my-account.php';
            break;
        case 'change_status':
            if (isset($_POST['change'])) {
                $id = $_GET['id'];
                $change_status = $_POST['change_status'];
                change_status($id, $change_status);
            }
            $listsp = order($_SESSION['user']['idUser']);
            include './page/my-account.php';
            break;
        case 'logout':
            session_destroy();
            $yourURL = "index.php";
            echo ("<script>location.href =' $yourURL '</script>");
            break;

        case 'shopcl':
            if (isset($_POST['search'])) {
                $sp = $_POST['loaisp'];
                if ($sp > 0) {
                    $loadsp = load_one_list_sp_same($sp);
                    $listdm = list_dm();
                } else {
                    $loadsp = list_sp('', 0);
                    $listdm = list_dm();
                }
            }
            include './page/shop-leftsidebar.php';
            break;
        case 'shop':

            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['idCate']) && ($_GET['idCate']) > 0) {
                $idCate = $_GET['idCate'];
            } else {
                $idCate = 0;
            }
            $loadsp = list_sp($kyw, $idCate);
            $listdm = list_dm();
            include './page/shop-leftsidebar.php';
            break;
        case 'addtocart':
            if (isset($_POST['addcart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['quantity'];
                $check = 0;
                for($i = 0;$i<sizeof($_SESSION['mycart']);$i++){
                    if($_SESSION['mycart'][$i][1]==$name){
                        $check = 1;
                        $soluongnew = $soluong+$_SESSION['mycart'][$i][4];
                        $_SESSION['mycart'][$i][4]=$soluongnew;
                        break;
                    }
                }
                if($check==0){
                    $ttien = $soluong * $price;
                    $spadd = [$id, $name, $image, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                    $thongbaocart='Thêm thành công';
                }
                
                // var_dump($_SESSION['mycart']);
            }
            include './page/header.php';
            $yourURL = "index.php?sp=shop";
            echo ("<script>location.href =' $yourURL '</script>");
            break;
        case 'cart':
            include_once './page/cart.php';
            break;

        case 'delete_cart':
            if (isset($_GET['idCart'])) {
                array_splice($_SESSION['mycart'], $_GET['idCart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }

            $yourURL = "index.php?sp=addtocart";
            echo ("<script>location.href =' $yourURL '</script>");
            break;
        case 'delete_cart_cart':
            if (isset($_GET['idCart'])) {
                array_splice($_SESSION['mycart'], $_GET['idCart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }

            $yourURL = "index.php?sp=cart";
            echo ("<script>location.href =' $yourURL '</script>");
            break;
        case 'chitiet':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sp = load_one_sp($id); 
            }
            include_once './page/single-product.php';
            break;
        case 'order':
            if (isset($_POST['place_order'])) {
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $date = time();
                $idbill = insert_bill($name, $address, $phone, $date);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['idUser'], $cart[0], $cart[4], $tt = 1, $idbill);
                }
                // $giohang = giohang();

            }

            include './page/comf.php';
            unset($_SESSION['mycart']);
            break;
        case 'blog':
            include './page/blog.php';
            break;
        case "contact":
            include_once "./page/contact.php";
            break;
        case "checkout":
            include_once "./page/checkout.php";
            break;
        default:
            $list_sp = list_sp($kyw = '', $idCate = 0);

            include './page/home.php';
    }
} else {
    $list_sp = list_sp($kyw = '', $idCate = 0);
    include_once './page/home.php';
}

include_once './page/footer.php';
