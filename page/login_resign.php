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

    .ad {
      margin-left: 19px;
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

    .fogot {
      text-align: center;
      font-size: 15px;

    }

    .fogot>a {
      color: blueviolet;

    }
  </style>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="?sp=login" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass" required />
          </div>

          <input type="submit" value="Login" name="login" class="btn solid" />
          <br>
          <?php if (isset($thongbaoerro)) {
            echo $thongbaoerro;
          } ?>
        </form>
        <form action="?sp=resign" method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="name" required />
          </div>
          <div class="input-field">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
            <input type="text" placeholder="Address" class="ad" value="" name="address" required />
          </div>
          <div class="input-field">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
            <input type="text" placeholder="Phone" class="ad" value="" name="phone" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass" required />
          </div>

          <input type="submit" class="btn" name="resign" value="Sign up" />
          <br>
          <?php if (isset($thongbaodangki)) {
            echo $thongbaodangki;
          } ?>
        </form>
      </div>
      <h2 class="fogot">Fogot the password <a href="?sp=forget">click here</a></h2>
    </div>

  </div>

  <script src="app.js"></script>
</body>

</html>