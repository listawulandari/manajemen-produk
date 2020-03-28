<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi</title>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Registrasi</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">

      <form method="post">

        <?php 
          echo form_open('register');
        ?>
    <p>Nama:</p>
    <p>
      <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
    </p>
    <p> <?php echo form_error('name');?> </p>
    <p>Username:</p>
    <p> 
      <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
    </p>
    <p> <?php echo form_error('username');?> </p>
    <p>Email:</p>
    <p> 
      <input type="text" name="email" value="<?php echo set_value('email'); ?>"/></p>
    <p> <?php echo form_error('email');?> </p>
    <p>Password:</p>
    <p>
      <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
    </p>
    <p> <?php echo form_error('password');?> </p>
    <p>Password Confirm: </p>
    <p>
      <input type="password" name="password_conf" value="<?php echo set_value('password_conf');?>"/>
    </p>
    <div class="col-4">
    <p>
      <input type="submit" class="btn btn-primary btn-block" name="btnSubmit" value="Daftar"/>
    </p>
  </div>
    <?php echo anchor(base_url().'login','Saya Sudah Memiliki Akun'); ?>
  </div>
</div>
</div>
</div>
</main>
</div>
</div>
        <!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>