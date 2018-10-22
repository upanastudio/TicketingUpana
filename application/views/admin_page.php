<!DOCTYPE html>
<html>
  <?php
    if(isset($this->session->userdate['logged_in'])){
      $username = ($this->session->userdata['logged_in']['username']);
      // $email = ($this->session->userdata['logged_in']['email']);
    }else {
      header("locatio: login");
    }
   ?>
  <head>
    <meta charset="utf-8">
    <title>Bereanda</title>
  </head>
  <body>
    <h1 style="text-align:center">Selamat Datang <?= ". $username ." ?> </h1>
    <br><br>
    <b id="logout"><a href="logout">LOGOUT</a></b>
  </body>
</html>
