<?php
session_start();
include '../module/pdo.php';
include "./header.php";
include '../module/danhmuc.php';
include '../module/sanpham.php';
include '../module/taikhoan.php';
include '../module/cart.php';
include '../module/banner.php';
include '../module/content.php';
include '../module/comment.php';


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
                    $id = $_POST['loaisp'];
                    if($id > 0){
                        $listsp = load_one_list_sp_same($id);
                        $listdm = list_dm();
                    }
                    else{
                        $listsp = list_sp($kyw='', $idCate=0);
                    $listdm = list_dm();
                    }
                }
                include_once './sanpham/list.php';
                break;
            case 'list_sp': {
                    $listsp = list_sp($kyw='', $idCate=0);
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
                        insert_sp($name, $price,$sale_price, $image, $description, $quantity,$view,$size, $idCategory);
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
                    $listsp = list_sp($kyw='', $idCate=0);
                    include_once './sanpham/list.php';
                    break;
                }
            case 'delete_sp': {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        delete_sp($_GET['id']);
                    }
                    $listsp = list_sp($kyw='', $idCate=0);
                    include_once './sanpham/list.php';
                    break;
                }


            case 'list_banner':
                $list_banner=list_banner();

                include_once './banner/list.php';
                break;
                
            case 'add_banner':{

                if (isset($_POST['new_banner'])) {
                    $title=$_POST['title'];
                    $s_title=$_POST['s_title'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../image/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }

                    insert_banner($title,$s_title,$image);
                }
                
                include_once './banner/add.php';
                break;
                  
            }

            case 'fix_banner': {
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $banner =load_one_banner($id);
                }
                
                include_once './banner/fix.php';
                break;
            }
            case 'fix_done_banner': {
                    if (isset($_POST['fix_banner'])) {
                        $id = $_POST['id'];
                        $title=$_POST['title'];
                        $s_title=$_POST['s_title'];
                        $description=$_POST['description'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../image/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                        } else {
                            //echo "Sorry, there was an error uploading your file.";
                        }
                        
                        update_banner($id,$title,$s_title,$description,$image);
                    }
                    $list_banner=list_banner();
                    include_once './banner/list.php';
                    break;
                }
                

                case 'delete_banner': {
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        
                        delete_banner($_GET['id']);
                    }
                    $list_banner=list_banner();
                    include_once './banner/list.php';
                    break;
                }

                case 'list_content':
                    $list_content=list_content();
    
                    include_once './content/list.php';
                    break;
                    
                case 'add_content':{
    
                    if (isset($_POST['new_content'])) {
                        $title=$_POST['title'];
                        $detail=$_POST['detail'];
                        $image = $_FILES['image']['name'];
                        $target_dir = "../image/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                            //echo "Sorry, there was an error uploading your file.";
                        }
    
                        insert_content($title,$detail,$image);
                    }
                    
                    include_once './content/add.php';
                    break;
                      
                }
    
                case 'fix_content':{
                    if (isset($_GET['id'])) {
                        $id=$_GET['id'];
                        $content=load_one_content($id);
                    }
                    include_once './content/fix.php';
                }
                    
                    break;

                case 'fix_done_content': {
                        if (isset($_POST['fix_content'])) {
                            $id = $_POST['id'];
                            $title=$_POST['title'];
                            $detail=$_POST['detail'];
                            $image = $_FILES['image']['name'];
                            $target_dir = "../image/";
                            $target_file = $target_dir . basename($_FILES["image"]["name"]);
                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                            } else {
                                //echo "Sorry, there was an error uploading your file.";
                            }
                            
                            update_content($id,$title,$detail,$image);
                        }
                        $list_listcontent=list_content();
                        include_once './content/list.php';
                        break;
                    }
                    
    
                    case 'delete_content': {
                        if (isset($_GET['id']) && ($_GET['id']) > 0) {
                            
                            delete_content($_GET['id']);
                        }
                        $list_content=list_content();
                        include_once './content/list.php';
                        break;
                    }

                    case 'list_comment':
                        // kiểm tra xem người dùng có bấm vào nút tìm kiếm trong trang danh sách sản phẩm không !
                        if (isset($_POST['timkiemok'])&&($_POST['timkiemok'])) {
                            // khởi tạo biến
                            $kw=$_POST['keyword'];
                            $idpro=$_POST['idpro'];
                        }
                        // nếu ngược lại ta xét giá trị cho $kw là rỗng và $iddm là bằng 0
                        else {
                            $kw='';
                            $idpro=0;
                        }
                        // chú ý phải tồn tại biến mới thực hiện câu lệnh
                        // hiển thị list danh mục 
                        $listsanpham=loadall_sp();
                        // hiển thị list danh sách
                        $listbinhluan=loadall_binhluan($kw,$idpro);
                     
                        // $listbinhluan ở đây chính là biến để hứng cái funtion có giá trị trả về ở modeltk.php !

                        $listbinhluan=loadall_binhluan($idpro);
                        include "binhluan/list.php";
                    break;


            // user
            case 'list_user':{
                $listuser = list_user();
                include_once './user/list.php';
                break;
            }
            case "add_user":{
                if(isset($_POST['new_user'])){
                    $name=$_POST['name'];
                    $role=$_POST['role'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $address=$_POST['address'];
                    insert_user($name,$role,$email,$password,$address);
                }
                
                include_once './user/add.php';
                break;
            }
            case "fix_user":{
                if(isset($_GET['id'])){
                    $user=list_one_user($_GET["id"]);
                }
                $listuser=list_user();
                include_once "./user/fix.php";
                break;
            }
            case "fix_done_user":{
                if(isset($_POST['fix_user'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $role=$_POST['role'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $address=$_POST['address'];
                    update_user($id,$name,$role,$email,$password,$address);
                }
                $listuser=list_user();
                include_once './user/list.php';
                break;
            }
            case "delete_user":{
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    delete_user($GET["id"]);
                }
                $listuser=list_user();
                include_once "./user/list.php";
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
                if(isset($_POST['change'])){
                    $id = $_GET['id'];
                    $change_status = $_POST['changest'];
                    change_status($id,$change_status);
                }
                $listkh = customer();
                $listst = status();
                var_dump( change_status($id,$change_status));
                include './donhang/list.php';
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
?>