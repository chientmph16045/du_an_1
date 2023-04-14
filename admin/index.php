<?php
session_start();
include '../module/pdo.php';
include "./header.php";
include '../module/danhmuc.php';
include '../module/sanpham.php';
include '../module/taikhoan.php';
include '../module/cart.php';
include '../module/binhluan.php';


if (isset($_SESSION['user'])) {
    if (isset($_GET['sp'])) {
        $sp = $_GET['sp'];
        switch ($sp) {
            //danh mục
            case 'list_dm': {
                    $listdm = list_dm();
                    include_once './danhmuc/list.php';
                    break;
                }
            case 'add_dm': {
                    if (isset($_POST['new'])) {
                        $danhmuc = $_POST['danhmuc'];
                        insert($danhmuc);
                    }
                    include_once './danhmuc/add.php';
                    break;
                }
            case 'fix_dm': {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        $dm = load_one_dm($_GET['id']);
                    }
                    include_once './danhmuc/fix.php';
                    break;
                }
            case 'fix_done_dm': {
                    if (isset($_POST['fix'])) {
                        if($_SERVER['REQUEST_METHOD']== "POST"){
                            $id = $_POST['id'];
                            $danhmuc = $_POST['danhmuc'];
                            update_dm($id, $danhmuc);
                        }
                    }
                    $listdm = list_dm();
                    include_once './danhmuc/list.php';
                    break;
                }
            case 'delete_dm': {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        delete_dm($_GET['id']);
                    }
                    $listdm = list_dm();
                    include_once './danhmuc/list.php';
                    break;
                }
            //sản phẩm
            case 'spcl':
                if (isset($_POST['tim'])) {

                    $id = $_POST['loaisp'];
                    if ($id > 0) {
                        $listsp = load_one_list_sp_same($id);

                        $listdm = list_dm();
                    } else {
                        $listsp = list_sp('', 0);
                        $listdm = list_dm();
                    }
                }
                include_once './sanpham/list.php';
                break;
            case 'list_sp': {
                    $listsp = list_sp($kyw = '', $idCate = 0);
                    $list_cart = cart();
                    $listdm = list_dm();
                    include_once './sanpham/list.php';
                    break;
                }
            case 'add_sp': {
                    if (isset($_POST['new_sp'])) {
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../image/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                            //echo "Sorry, there was an error uploading your file.";
                        }
                        $description = $_POST['description'];
                        $quantity = $_POST['quantity'];
                        $idCategory = $_POST['idCategory'];
                        insert_sp($name, $price, $image, $description, $quantity, $idCategory);
                    }
                    $listdm = list_dm();
                    include_once './sanpham/add.php';
                    break;
                }
            case 'fix_sp': {
                    if (isset($_GET['id'])) {
                        $sp = load_one_sp($_GET['id']);
                    }
                    $listdm = list_dm();
                    include_once './sanpham/fix.php';
                    break;
                }
            case 'fix_done_sp': {
                    if (isset($_POST['fix_sp'])) {
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../image/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                        } else {
                            //echo "Sorry, there was an error uploading your file.";
                        }
                        $description = $_POST['description'];
                        $quantity = $_POST['quantity'];
                        $idCate = $_POST['idCategory'];
                        update_sp($id, $name, $price, $image, $description, $quantity, $idCate);
                    }
                    $listsp = list_sp($kyw = '', $idCate = 0);
                    include_once './sanpham/list.php';
                    break;
                }
            case 'delete_sp': {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        delete_sp($_GET['id']);
                    }
                    $listsp = list_sp($kyw = '', $idCate = 0);
                    include_once './sanpham/list.php';
                    break;
                }

            // user
            case 'list_user': {
                    $listuser = list_user();
                    include_once './user/list.php';
                    break;
                }
            case "add_user": {
                    if (isset($_POST['new_user'])) {
                        if($_SERVER['REQUEST_METHOD']== "POST"){
                            if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password']) || empty($_POST['address'])){
                                $thongbao="Không được để trống";
                            }else{
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $password = $_POST['password'];
                                $address = $_POST['address'];
                            }
                            
                            $checkemail = checkforget($email);
                            if (is_array($checkemail)) {
                                $thongbaodangki = "Email đã tồn tại";
                            } else {
                                insert_user($name, $phone, $email, $password, $address);
                            }
                        }
                    }
                    include_once './user/add.php';
                    break;
                }
            case "fix_user": {
                    if (isset($_GET['id'])) {
                        $user = list_one_user($_GET["id"]);
                    }
                    
                    $listuser = list_user();
                    include_once "./user/fix.php";
                    break;
                }
            case "fix_done_user": {
                if (isset($_GET['id'])) {
                    $user = list_one_user($_GET["id"]);
                }
                if($_SERVER['REQUEST_METHOD']== "POST"){
                    if (isset($_POST['fix_user'])) {
                        $name = $_POST['name'];
                  
                        $phone = $_POST['phone'];
                        $password = $_POST['password'];
                        $address = $_POST['address'];
                        $id = $_POST['id'];
                        $email = $_POST['email'];
                        update_user($id, $name, $phone, $email, $password, $address);               
                    }    
                        
                }    
                    
                    $listuser = list_user();
                    include_once './user/fix.php';
                    break;
                }
            case "delete_user": {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        delete_user($_GET["id"]);
                    }
                    $listuser = list_user();
                    include_once "./user/list.php";
                    break;
                }

            case 'logout':
                session_destroy();
                $yourURL = "../";
                echo ("<script>location.href =' $yourURL '</script>");
                break;
            //đơn hàng
            case 'donhang':
                $listkh = customer();
                $listst = status();
                include './donhang/list.php';
                break;
            case 'chang_status':
                if (isset($_POST['change'])) {
                    $id = $_GET['id'];
                    $idsp = $_POST['idsp'];
                    $soluong = $_POST['soluong'];
                    $slsp = $_POST['slsp'];
                    $updatesoluong = 0;
                    $change_status = $_POST['changest'];
                    if ($change_status == 2) {
                        $updatesoluong = $slsp - $soluong;
                        change_quantity($idsp, $updatesoluong);
                    }
                    change_status($id, $change_status);
                }
                $listkh = customer();
                $listst = status();
                include './donhang/list.php';
                break;

            // bình luận 
            case 'list_comment':
                $listcm=load_allcomment();
                include './binhluan/list.php';
                break;
            case 'delete_cm': {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        delete_cm($_GET['id']);
                    }
                    $listcm=load_allcomment();
                    include_once './binhluan/list.php';
                    break;
                }    
        }
    } else {
        $listsp = list_sp($kyw = '', $idCate = 0);
        include "./home.php";
    }

    include "./footer.php";
} else {
    include_once './login.php';
    if (isset($_GET['sp'])) {
        $sp = $_GET['sp'];
        switch ($sp) {
            case 'login':
                if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $checkuser = checkuser($email, $pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        extract($_SESSION['user']);
                        if ($role == 3) {
                            $yourURL = "index.php";
                            echo ("<script>location.href =' $yourURL '</script>");
                        }
                    }
                }
                break;
        }
    }
}