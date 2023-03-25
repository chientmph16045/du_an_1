<?php
session_start();
include '../module/pdo.php';
include "./header.php";
include '../module/danhmuc.php';
include '../module/sanpham.php';
include '../module/taikhoan.php';


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
                        $id = $_POST['id'];
                        $danhmuc = $_POST['danhmuc'];
                        update_dm($id, $danhmuc);
                    }
                    $listdm = list_dm();
                    include_once './danhmuc/list.php';
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
                    $sp = $_POST['loaisp'];
                    if ($sp > 0) {
                        $listsp = load_one_list_sp_same($sp);
                        $listdm = list_dm();
                    } else {
                        $listsp = list_sp('', 0);
                        $listdm = list_dm();
                    }
                }
                include_once './sanpham/list.php';
                break;
            case 'list_sp': {
                    $listsp = list_sp('', 0);
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
                    $listsp = list_sp('', 0);
                    include_once './sanpham/list.php';
                    break;
                }
            case 'delete_sp': {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        delete_sp($_GET['id']);
                    }
                    $listsp = list_sp('', 0);
                    include_once './sanpham/list.php';
                    break;
                }
            case 'logout':
                session_destroy();
                $yourURL = "index.php";
                echo ("<script>location.href =' $yourURL '</script>");
                break;
        }
    } else {
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
