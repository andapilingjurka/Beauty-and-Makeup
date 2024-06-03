<?php
include "../include/functions.php";
?>

<?php
if(isset($_POST['login'])){
    login($_POST['email'],$_POST['password']);
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beauty And Makeup</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="forms.css"/>
    <script src="jquery-3.6.0.js"></script>
    <script src="jquery.validate.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!--FORMA PER SIGN IN -->
          <form
            method="POST"
            id="signup-login"
            class="sign-in-form"
            action="#"
            name="login"
          >
            <h2 class="title">SIGN IN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="email" type="text" required/>
              <label for="">Email</label>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" required/>
              <label for="">Password</label>
            </div>

            <button type="submit" class="btn submit" id="login" name="login">
              Sign in
            </button>

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>NEW HERE !</h3>
            <p>
            Create a new account to personalize your experience.
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="../images/img1.png" class="image" alt="" style="margin-right:20px;" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>ALREADY HAVE AN ACCOUNT !</h3>
            <p>
            It's great to have you back! Click 'Sign in' to continue.
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="../images/img2.png" class="image" alt="" style="padding-left:50px;" />
        </div>
      </div>
    </div>

    <script src="forms.js"></script>
  </body>
</html>