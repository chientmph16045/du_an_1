<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .btn{
      margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="index.php?sp=login">
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" class="btn" name="login" value="Login">
        
      </form>
    </div>

  </body>
</html>
