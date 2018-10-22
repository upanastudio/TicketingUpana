<!DOCTYPE html>
<html >
<?php
  // if (isset($this->session->userdata['logged_in'])) {
  //   header("location : http://localhost/login/index.php/user_authentication/user_login_process");
  // }
 ?>
  <head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <h1 style="text-align:center">Login Admin</h1>
  </head>
  <body>
    <?php
    if (isset($logout_message)) {
      echo "<div class='message'>";
      echo $logout_message;
      echo "</div>";
    }

    if (isset($message_display)) {
      echo "<div class='message'>";
      echo $message_display;
      echo "</div>";
    }

    echo form_open('user_authentication/user_login_process');

     echo "<div class='error_msg'>";
     if (isset($error_message)) {
     echo $error_message;
     }
     echo validation_errors();
     echo "</div>";
     ?>

     <!-- //set echo to < ?= ?>////////////////////////////////////////////////////////////////////////////////////// -->

      <label>Username</label><br><input type="text" name="username" value="">
      <br><br>
      <label>Password</label><br><input type="password" name="password" value="">
      <br><br>
      <input type="submit" name="submit" value="Login">
      <?= form_close(); ?>
  </body>
</html>
