<?php
session_start();
include "../../module/pdo.php";
include "../../module/binhluan.php";

$idpro = $_REQUEST['idpro'];
$listcmt = loadall_comment($idpro);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/plugins.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/dropdown.css" />
    <link rel="shortcut icon" type="./src/imagex-icon" href="./src/image/menu/logo/logo-url.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<style>
    .binhluan{
        width: 100%;
        border: 1px solid black;
    }
    .user-id{
        width: 30%;
        color:blue;
        margin-left:20px;
        margin-right:20px;
    }
    .user-comment{
        width: 50%;
        color:black;
        margin-left:20px;
        margin-right:20px;
    }
</style>
<?php
        if (isset($_POST['btn_cmt']) && $_POST['btn_cmt']) {
            $content = $_POST['content_cmt'];
            $idpro = $_POST['idpro'];
            $idUser = $_SESSION['user']['idUser'];
            $nameUser = $_SESSION['user']['nameUser'];
            
            $dateComment = date("m/d/Y h:i:sa");
            if ($content == null) {
                echo '<script>alert("không được để trống !")</script>';
            } else {
                insert_comment($content, $dateComment,$idpro,$idUser,$nameUser);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        }
        ?>
    <div class="product_comments_block">
        <div class="binhluan">
        <?php foreach ($listcmt as $cmt) : extract($cmt); ?>
        
            <div class="comment_details same-stuff ">
                <span class="user-id"><?= $nameUser ?></span>
                <em class="user-comment"><?= $content ?></em>
                <em><?= $dateComment ?></em>
            </div>
        
        <?php endforeach ?>
        <!-- Form bình luận-->
        </div>
        <div class="comment-btn-area mt-3">
        <?php if(isset($_SESSION['user'])){ ?>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <textarea name="content_cmt" class="area-cmt" cols="60" rows="3" placeholder="Nhập bình luận của bạn" required></textarea> <br>
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="submit" name="btn_cmt" class="ip-cmt" value="Gửi">
            </form>
            <?php }else {?>
                            <div>
                                <p class="alert alert-primary fs-6">Vui lòng đăng nhập để bình luận !</p>
                            </div>
                        <?php } ?>
        </div>
        
        <!-- End bình luận -->
    </div>
    <script src="./src/js/plugins.min.js"></script>
    <script src="./src/js/ajax-mail.js"></script>
    <script src="./src/js/main.js"></script>
</body>

</html>