<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/login_usr/css/style.css">
  <link rel="stylesheet" href="../assets/login_usr/css/bootstrap.css">
  <link href="<?=base_url('assets/');?>apeloka.jpeg" rel="icon">

</head>
<body>
     <div class="sticky-top">
    <div class=" d-flex text-align-center justify-content-center">
  <img src="<?= base_url ('assets')?>/login_usr/img/Logo.svg" class="logo-apeloka"/>
  </div>
</div>

<div class="head">
    <img src="<?= base_url ('assets')?>/login_usr/img/icon-profile.svg" alt="">
    <div class="head-isi"><h2><b>Hai!</b></h2>
    <h5>Silahkan buat akun untuk lanjut</h5>
    <h5>menggunakan website Apeloka</h5>
</div>
</div>

<div class="login">
    <br><h1><b>Login User!</b></h1><br>
    <?= $this->session->flashdata('pesan'); ?>
    <form class="form" style="margin-left: 37%;" action="<?= base_url('user/login_user');?>" method="post" > 
    <div class="form-loginusr">
    <input type="text" name="email" placeholder="Username" class="form" ><br>
    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?><br>
    <input type="password" name="password" placeholder="Password" class="form" ><br>
    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?><br>

    <button type="submit" class="btn btn-primary btn-user btn-block" style="margin-left: 18%;padding:15px;width:100px;"><b>Log In</b></button>
    </div><br>
    <div >
    <p style="font-size:20px;">Anda belum punya akun ?<a href="<?= base_url('register/registrasi');?>"class="registrasi" style="font-size:20px;"> Buat Akun </a></p>
    </div>
</div>

<div class="footer">
<b><p>Dengan Log In, kamu menyetujui dengan <a href="">Syarat & Ketentuan</a><br>dan <a href="">Kebijakan Privasi</a> Apeloka</p></b>
</div>
</body>
</html>