<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Animated Login Form | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .btn {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <!-- <div class="center">
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
    </div> -->
  <section class="forms-section">
    <h1 class="section-title">Animated Forms</h1>
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Login
          <span class="underline"></span>
        </button>
        <form class="form form-login" method="post" action="index.php?sp=login">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
              <label for="login-email">E-mail</label>
              <input id="login-email" type="email" name="email" required>
            </div>
            <div class="input-block">
              <label for="login-password">Password</label>
              <input id="login-password" type="password" name="password" required>
            </div>
          </fieldset>
          <button type="submit" class="btn-login" value="login" name="login">Login</button>
        </form>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Sign Up
          <span class="underline"></span>
        </button>
        <form class="form form-signup">
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="signup-email">E-mail</label>
              <input id="signup-email" type="email" required>
            </div>
            <div class="input-block">
              <label for="signup-password">Password</label>
              <input id="signup-password" type="password" required>
            </div>
            <div class="input-block">
              <label for="signup-password-confirm">Confirm password</label>
              <input id="signup-password-confirm" type="password" required>
            </div>
          </fieldset>
          <button type="submit" class="btn-signup">Continue</button>
        </form>
      </div>
    </div>
  </section>
</body>
<script>
  const switchers = [...document.querySelectorAll('.switcher')]
  switchers.forEach(item => {
    item.addEventListener('click', function() {
      switchers.forEach(item => item.parentElement.classList.remove('is-active'))
      this.parentElement.classList.add('is-active')
    })
  })
</script>

</html>