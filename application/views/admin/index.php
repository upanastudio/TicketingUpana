<?php if(!$this->session->userdata('logged_in')) : ?>
<?php redirect('users/login'); ?>
<?php endif; ?>

<?php if($this->session->userdata('logged_in')) : ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Beranda</title>
  </head>
  <body>
    <div style="text-align:center">
      <h1>Selamat datang admin</h1>

      <p><a href="<?php echo base_url(); ?>users/logout">Logout</a></p>
    </div>
  </body>
</html>
<?php endif; ?>
