<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APELOKA</title>

  <link rel="stylesheet" href="<?= base_url ('assets')?>/interface/css/style.css">
  <link rel="stylesheet" href="<?= base_url ('assets')?>/interface/css/bootstrap.css">
  <link href="<?=base_url('assets/');?>apeloka.jpeg" rel="icon">

  
</head>
<body>
  <!-- bagian logo -->
  <div class="sticky-top">
    <div class=" d-flex text-align-center justify-content-center">
  <img src="<?= base_url ('assets')?>/interface/img/Logo.svg" class="logo-apeloka"/>
  </div>
</div>
<!-- bagian search -->
  <p><form action="/search" method="GET" class="form-search">
    <div class="justify-content-center">
    <input type="text" id="searchInput" name="q" placeholder="Cari pekerjaan impianmu" class="input-search"></div>
<!-- bagian cari provinsi -->
    <h6 class="h6-form"><a href="#cari" class="cari">Cari Provinsi/Kota/Kabupaten</a></h6>
</form></p> 
<div class="container-fluid">
    <div class="row text-center">
<?php foreach ($iklan as $ikl) : ?>
<div class="card ml-4" style="width: 16rem;margin-left: 30px;margin-bottom:10px;">
<img src="<?= base_url('assets/admin/img/gambar/') . $ikl['gambar'];?>" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title mb-1"><?php echo $ikl['judul']; ?></h5>
  <h6 class="card-title"><?php echo $ikl['perusahaan']; ?></h6>
  <p class="card-title"><?php echo $ikl['lokasi']; ?></p>
  <p class="card-title"><?php echo $ikl['pendidikan']; ?></p>
  <p class="card-title"><?php echo $ikl['gaji']; ?></p>
  <p class="card-title"><?php echo $ikl['gender']; ?></p>
  <p class="card-title"><?php echo $ikl['pengalaman']; ?></p>
  <p class="card-title"><?php echo $ikl['deskripsi']; ?></p>
   <?php echo anchor('user/'.$ikl['id_iklan'],'<div class="btn btn-sm btn-primary">Lamar</div>' )?>
   <?php echo anchor('user/user/detail/'.$ikl['id_iklan'],'<div class="btn btn-sm btn-success"> Detail</div>' )?>
</div>
</div>
<?php endforeach; ?>
</div>
  </div>