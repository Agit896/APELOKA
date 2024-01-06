<div class="sticky-top">
  <div class=" d-flex text-align-center justify-content-center">
  </div>
  <p>
  <div class="kembali " style="background-color: aqua;">
    <a href="../menu_semua.php"><img src="../img/icon-arrow.svg" alt="" style="width: 2%;"></a>
    <center>
      <p sty>Detail Pekerjaan</p>
    </center>
  </div>
  </p>
  <div class="container-fluid">
    <div class="card">
      <nav>
        <?php foreach ($iklan as $ikl) : ?>
          <main class="card">
            <h5 class="card-header">Detail Pekerjaan</h5>
            <article style="padding: 20px;">
              <p><img src="<?= base_url('assets/admin/img/gambar/') . $ikl['gambar']; ?>" style="width: 200px;" alt=""><span class="promo">dipromosikan</span></p>
              <div class="konten">

                <h3><?php echo $ikl['judul']; ?></h3>
                <h5><?php echo $ikl['perusahaan']; ?></h5>
                <div class="keterangan">
                  <p><img src="<?= base_url('assets') ?>/interface/img/ic-vacancy-location.svg" style="width: 20px"><?php echo $ikl['lokasi']; ?></p>
                  <p><img src="<?= base_url('assets') ?>/interface/img/ic-education.svg" style="width: 20px"><?php echo $ikl['pendidikan']; ?></p>
                  <p><img src="<?= base_url('assets') ?>/interface/img/ic-vacancy-salary.svg" style="width: 20px">Rp. <?php echo $ikl['gaji']; ?></p>
                  <br>
                  <h2>Gender :</h2><br>
                  <p><?php echo $ikl['gender']; ?></p>
                  <h2>Pendidikan :</h2><br>
                  <p><?php echo $ikl['pendidikan']; ?></p>

                  <h2>Desripsi Pekerjaan :</h2><br>
                  <p style="max-width: 310px;"><?php echo $ikl['deskripsi']; ?></p><br>
                </div>
              </div>
              <a href="<?= base_url('user/user/lamar') ?>" class="btn btn-success">Lamar</a>
    </div>
    </article>
  <?php endforeach; ?>
  </nav>
  </div>
</div>



<body>