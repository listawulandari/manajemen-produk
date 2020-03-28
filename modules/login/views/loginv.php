<?php
defined('BASEPATH') OR exit ('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Halaman Login</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login disini !</p>

      <form method="post">
      <?php //cetak jika ada nontifikasi
      if($this->session->flashdata('sukses')) {
        echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses'). '</p>';
        }?>
        <?php echo form_open('login');?>
        <div class="input-group mb-3">
        <p>Username:</p>
        <p> <input type="text" name="username" value="<?php echo set_value('username'); ?>"/></p>
        <p> <?php echo form_error('username');?> </p>
        </div>
        <div class="input-group mb-3">
        <p>Password:</p>
        <p> <input type="password" name="password" value="<?php echo set_value('password'); ?>"/></p>
        <p> <?php echo form_error('password'); ?> </p>
        </div>
        <div class="col-4">
        <p><input type="submit" class="btn btn-primary" name="btnSubmit" value="Login"/></p>
        <?php echo form_close();?>
        </div>
        <p>Belum memiliki akun? Silahkan klik <?php echo anchor(site_url().'/register', 'di sini..'); ?></p>
</body>
  </html>
