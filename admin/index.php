<?php
include '../module/pdo.php';
include "./header.php";
include '../module/danhmuc.php';
include '../module/sanpham.php';

if(isset($_GET['sp'])){
    $sp = $_GET['sp'];
    switch($sp){
        //danh mục
        case 'list_dm':{
            $listdm = list_dm();
            include_once './danhmuc/list.php';
            break;
        }
        case 'add_dm':{
            if(isset($_POST['new'])){
                $danhmuc = $_POST['danhmuc'];
                insert($danhmuc);
            }
            include_once './danhmuc/add.php';
            break;
        }
        case 'fix_dm':{
            if(isset($_GET['id']) && ($_GET['id'])>0){
                $dm = load_one_dm($_GET['id']);
            }
            include_once './danhmuc/fix.php';
            break;
        }
        case 'fix_done_dm':{
            if(isset($_POST['fix'])){
                $id = $_POST['id'];
                $danhmuc = $_POST['danhmuc'];
                update_dm($id,$danhmuc);
            }
            $listdm = list_dm();
            include_once './danhmuc/list.php';
        }
        case 'delete_dm':{
            if(isset($_GET['id']) && ($_GET['id'])>0){
               delete_dm($_GET['id']);
            }
            $listdm = list_dm();
            include_once './danhmuc/list.php';
            break;
        }
        //sản phẩm
        case 'list_sp':{
            $listsp = list_sp();
            include_once './sanpham/list.php';
            break;
        }
        case 'add_sp':{
            if(isset($_POST['new_sp'])){
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
                insert_sp($name,$price,$image,$description,$quantity,$idCategory);
            }
            $listdm = list_dm();
            include_once './sanpham/add.php';
            break;
        }
    }
}else{
    include "./home.php";
}

include "./footer.php";
?>