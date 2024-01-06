<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APELOKA</title>

  <link rel="stylesheet" href="<?= base_url('assets') ?>/interface/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/interface/css/bootstrap.css">
  <link href="<?= base_url('assets/'); ?>apeloka.jpeg" rel="icon">


</head>

<body>
  <!-- bagian logo -->
  <div class="sticky-top">
    <div class=" d-flex text-align-center justify-content-center">
      <img src="<?= base_url('assets') ?>/interface/img/Logo.svg" class="logo-apeloka" />
    </div>
  </div>
  <!-- bagian search -->
  <p>
  <form action="/search" method="GET" class="form-search">
    <div class="justify-content-center">
      <input type="text" id="searchInput" name="q" placeholder="Cari pekerjaan impianmu" class="input-search">
    </div>
    <!-- bagian cari provinsi -->
    <h6 class="h6-form"><a href="#cari" class="cari">Cari Provinsi/Kota/Kabupaten</a></h6>
  </form>
  </p>
  <!-- bagian konten -->
  <p>
  <nav>
    <div class="justify-content-evently">
      <div class="menu-box">
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_semua.png" class="menu-logo"></p>
        </a>
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_sales.png" class="menu-logo"></p>
        </a>
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_pendidikan.png" class="menu-logo"></p>
        </a>
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_staff.png" class="menu-logo"></p>
        </a>
      </div>
      <div class="menu-box">
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_it.png" class="menu-logo"></p>
        </a>
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_marketing.png" class="menu-logo"></p>
        </a>
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_admin.png" class="menu-logo"></p>
        </a>
        <a href="<?= base_url('user/user/menu_semua') ?>" class="menu-item">
          <p><img src="<?= base_url('assets') ?>/interface/img/icon_lainnya.png" class="menu-logo"></p>
        </a>
      </div>
    </div>
  </nav>
  </p>
  <div class="container-fluid">
    <div class="row text-center">
      <?php foreach ($iklan as $ikl) : ?>
        <div class="card ml-4" style="width: 16rem;margin-left: 30px;margin-bottom:10px;">
          <img src="<?= base_url('assets/admin/img/gambar/') . $ikl['gambar']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $ikl['judul']; ?></h5>
            <h6 class="card-title"><?php echo $ikl['perusahaan']; ?></h6>
            <p class="card-title"><?php echo $ikl['lokasi']; ?></p>
            <p class="card-title"><?php echo $ikl['pendidikan']; ?></p>
            <p class="card-title"><?php echo $ikl['gaji']; ?></p>
            <p class="card-title"><?php echo $ikl['gender']; ?></p>
            <p class="card-title"><?php echo $ikl['pengalaman']; ?></p>
            <p class="card-title"><?php echo $ikl['deskripsi']; ?></p>
            <?php echo anchor('user/user/detail/' . $ikl['id_iklan'], '<div class="btn btn-sm btn-success"> Detail</div>') ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <p>
  <div class="container-content1">
    <center>
      <h1>Loker Terpercaya di Indonesia</h1><br>
      <b>
        <p>Temukan lowongan kerja di indonesia terpercaya hari ini. Cek info loker </p>
        <p>untuk lulusan SMA/SMK, D3, S1, Fresh graduate, dan berpengalaman terdekat </p>
        <p>di kotamu. Lamar Sekarang di Apeloka dengan hanya satu klik!</p>
        </p>
      </b>
    </center>
  </div>
  </p>
  <div class="container-content2">
    <center><select name="Lulusan  yang tersedia" class="select-lulusan">
        <option value="Lulusan  yang tersedia">Lulusan yang Tersedia</option>
        <option value="Fresh-graduate"><a href="#Fresh-graduate">Fresh Graduate</a></option>
        <option value="SMK"><a href="#SMA/K">SMA/SMK</a></option>
        <option value="D3"><a href="#D3">D3</a></option>
        <option value="S1"><a href="#S1">S1</a></option>
      </select></center><br>
    <center><select name="Lulusan  yang tersedia" class="select-kota">
        <option value="Kota/Kabupaten yang Tersedia">Kota/Kabupaten yang Tersedia</option>
        <option value="Banyumas"><a href="#Banyumas">Banyumas</a></option>
        <option value="Purwokerto"><a href="#Purwokerto">Purwokerto</a></option>
        <option value="Purbalingga"><a href="#Purbalingga">Purbalingga</a></option>
      </select></center><br>
    <center><input type="submit" value="Kirim" style="padding: 10px;"></center><br>
    <form class="form-footer">
      <p>
      <p><a href="#bantuan" class="a-foot">Bantuan | Kebijakan Privasi | Syarat & Ketentuan</a></p>
      </p>
    </form>
    </p>
  </div>
  <br>
  <center>
    <p class="p-footer">© 2023 Apeloka. All rights reserved.</p>
  </center>
  <br>
  <p>
  <div class="fixed-bottom">
    <a href="<?= base_url('user/user') ?>"><img src="<?= base_url('assets') ?>/interface/img/icon menu.svg" alt="" style="width: 2%;"></a>

    <a href="<?= base_url('admin/login_admin/logout') ?>"><img src="<?= base_url('assets') ?>/interface/img/icon log out.svg" alt="" style="width: 10%;"></a>
  </div>
  </p>
</body>

</html>