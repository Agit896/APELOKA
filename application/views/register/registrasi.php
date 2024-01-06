<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('assets')?>/registrasi/css/style.css" />
    <link rel="stylesheet" href="<?= base_url('assets')?>/registrasi/css/bootstrap.css" />
    <link href="<?=base_url('assets/');?>apeloka.jpeg" rel="icon">
  </head>
  <body>
    <div class="sticky-top">
      <div class="d-flex text-align-center justify-content-center">
        <img src="<?= base_url('assets')?>/registrasi/img/apeloka.png" class="logo-apeloka" />
      </div>
    </div>

    <div class="head">
      <img src="<?= base_url('assets')?>/registrasi/img/icon-profile.svg" alt="" />
      <div class="head-isi">
        <h2><b>Hai!</b></h2>
        <h5>Silahkan buat akun untuk lanjut</h5>
        <h5>menggunakan website Apeloka</h5>
      </div>
    </div>

    <div class="login">
      <h1><b>Buat Akun!</b></h1>
      <br />
      <?= $this->session->flashdata('pesan'); ?>
      <form class="form" action="<?= base_url('register/registrasi');?>"  style="margin-left: 37%;"method="post">
      <div class="form-loginusr">
        
          <input type="text" name="username"placeholder="Username" class="form">
          <br><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?><br>
          <input type="text" name="email"placeholder="Email" class="form" ><br><br>
            <input type="text" name="password1"placeholder="Password" class="form" ><br><br>
          <input type="text" name="password2"placeholder="Ulangi Password" class="form"><br>
       
       <br>
        
          <button type="submit"class="btn btn-success"  style="margin-left: 20%;"><b>Buat Akun</b></button>
        
      </div>
    </div>

    <div class="footer">
      <b
        ><p>
          Dengan membuat akun, kamu menyetujui <a href="">Syarat & Ketentuan</a
          ><br />dan <a href="">Kebijakan Privasi</a> Apeloka
        </p></b
      >
    </div>
  </body>
</html>
