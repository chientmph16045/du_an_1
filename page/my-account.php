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
            width: 700px;
            padding-left: 150px;
            padding-right: 10px;
            border-right: 1px solid black;
        }

        .sign-up-form {
            padding-left: 50px;
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

        .ad {
            margin-left: 19px;
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
                    <h2 class="title">Update Account</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Họ và tên" value="<?= $nameUser ?>" name="name" required />
                    </div>
                    <div class="input-field">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <input type="text" placeholder="Địa chỉ" class="ad" value="<?= $address ?>" name="address"
                            required />
                    </div>
                    <div class="input-field">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <input type="text" placeholder="Số điện thoại" class="ad" value="<?= $phone ?>" name="phone"
                            required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mật khẩu" value="<?= $password ?>" name="pass" required />
                    </div>
                    <input type="hidden" name="id" value="<?= $idUser ?>" id="">
                    <input type="hidden" name="email" value="<?= $email ?>">
                    <input type="submit" value="Update" name="update" class="btn solid" />
                    <br>
                    <?php if (isset($thongbao)) {
                        echo $thongbao;
                    } ?>
                </form>
                <div class="sign-up-form">

                    <h2 class="title">Your order</h2>

                    <table>
                        <tr>
                            <th>IDCART</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        <?php foreach ($listsp as $sp):
                            extract($sp);
                            if ($tinhtrang == 1 || $tinhtrang == 2) {
                                $change = '<input type="hidden" name="change_status" value="0">';
                            } else {
                                $change = '<input type="hidden" name="change_status" value="6">';
                            }

                            ?>
                            <tr>
                                <td>
                                    <?= $idCart ?>
                                </td>
                                <td>
                                    <?= $namePro ?>
                                </td>
                                <td>
                                    <?= $quantity ?>
                                </td>
                                <td value="<?= $idStatus ?>">
                                    <?= $nameStatus ?>
                                </td>
                                <td>
                                    <?php

                                    if ($tinhtrang == 7 || $tinhtrang == 4 || $tinhtrang == 0 || $tinhtrang == 6||$tinhtrang==3) {
                                        $trangthai = '';
                                        if ($tinhtrang == 7) {
                                            $trangthai = "Hủy hàng thất bại ";
                                        }
                                        if ($tinhtrang == 4) {
                                            $trangthai = "Giao thành công";
                                        }
                                        if ($tinhtrang == 0) {
                                            $trangthai = "Hủy hàng thành công";
                                        }
                                        if ($tinhtrang == 6) {
                                            $trangthai = "Đang chờ xác nhận";
                                        } 
                                        if ($tinhtrang == 3) {
                                            $trangthai = "Đang giao hàng";
                                        }
                                        ?>
                                        <input type="submit" value="<?= $trangthai ?>" disabled name="change"
                                            class="btn solid" />

                                        <?php
                                    } elseif ($tinhtrang == 1 || $tinhtrang == 2) { ?>
                                        <form action="?sp=change_status&id=<?= $idCart ?>" method="post">
                                            <?= $change ?>
                                            <input type="hidden" value="<?= $quantity ?>" name="quanti">
                                            <input type="hidden" value="<?= $slsp ?>" name="slsp">
                                            <input type="hidden" value="<?= $idSp ?>" name="idsp">
                                            <input type="hidden" value="<?= $tinhtrang ?>" name="tinhtrang">
                                            <input type="hidden" value="0" name="changest">
                                            <input type="submit" value="Hủy" name="change" class="btn solid" />
                                        </form>

                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </table>
                    <br>
                    <?php if (isset($thongbaodangki)) {
                        echo $thongbaodangki;
                    } ?>
                </div>
            </div>
        </div>

    </div>

    <script src="app.js"></script>
</body>

</html>