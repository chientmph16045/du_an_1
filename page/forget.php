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
      padding-left: 300px;
      padding-right: 50px;
     
    }

    .input-field {
      padding-top: 10px;
    }

    .sign-up-form {
      padding-left: 30px;
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

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="?sp=forget" method="post" class="sign-in-form">
          <h2 class="title">Forget Account</h2>
          <div class="input-field">
          <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" required />
          </div>
          <input type="submit" value="Forget" name="forget" class="btn solid" />
          <br>
          <?php if (isset($thongbao)) {
            echo $thongbao;
          } ?>
        </form>
      </div>
   
    </div>

  </div>

  <script src="app.js"></script>
</body>

</html>