<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
    <style>
        .forms-container {
            padding-top: 180px;

        }

        .signin-signup {
            display: flex;
        }

        .sign-in-form {
            padding-left: 250px;
            padding-right: 50px;
            border-right: 1px solid black;
        }

        .input-field {
            padding-top: 10px;
        }


        .input-field>i {
            padding-right: 20px;
        }

        .btn {
            margin-top: 20px;
            margin-bottom: 90px;
        }
    </style>
</head>
<?php if (isset($_SESSION['user']))
    extract($_SESSION['user']);
?>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="?sp=account_fix" method="post" class="sign-in-form">
                    <h2 class="title">Cập nhật thông tin tài khoản</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Họ và tên" name="name" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" placeholder="Địa chỉ" name="address" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" placeholder="Số điện thoại" name="phone" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mật khẩu" value="<?=$password?>" name="phone" required />
                    </div>
                    <input type="submit" value="Login" name="login" class="btn solid" />
                    <br>
                    <?php if (isset($thongbaoerro)) {
                        echo $thongbaoerro;
                    } ?>
                </form>
            </div>
        </div>

    </div>

    <script src="app.js"></script>
</body>

</html>