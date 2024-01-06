<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Apeloka-Aplikasi Penyedia Lowongan Pekerjaan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/'); ?>apeloka.jpeg" rel="icon">
  <link href="<?= base_url('assets') ?>/start/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets') ?>/start/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/start/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/start/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/start/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/start/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/start/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets') ?>/start/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland
  * Updated: Sep 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page/start/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="#hero"><img src="<?= base_url('assets') ?>/interface/img/Logo.svg" class="rounded mx-auto d-block" alt="logo apeloka"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?= base_url('assets') ?>/start/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>Log in</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu dropdown-info" aria-labelledby="dLabel">
              <li><a href="user/login_user">User</a></li>
              <li><a href="admin/login_admin">Admin</a></li>
            </ul>
          <li><a class="nav-link scrollto" href="#info_loker">Info Loker</a></li>
          <li><a class="nav-link scrollto" href="#tentang_kami">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
          <!-- <ul>
              <li><a href="#">User</a></li>
              <li><a href="#">Admin</a></li>
              <li><a href="#">Perusahaan</a></li>
            </ul> -->
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Cari Loker dan <br> Rekrut Karyawan Makin Mudah dan Aman!</h1><br><br>
          </div>
          <div>
            <a href="CL/cari_lowongan" class="download-btn">Cari Lowongan</a>

          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="<?= base_url('assets') ?>/start/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Details Section ======= -->
  <section id="info_loker" class="info_loker">
    <div class="container">
      <br><br><br>
      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="<?= base_url('assets') ?>/start/img/details-1.png" class="img-fluid" alt="">
        </div>

        <div class="col-md-8 pt-4" data-aos="fade-up">
          <p>Bersama Apeloka</p>
          <h3>Cari lowongan kerja dengan mudah <br> dan juga efisien </h3>
          <ul>
            <li><i class="bi bi-check"></i>Temukan pekerjaan yang kamu inginkan</li>
            <li><i class="bi bi-check"></i> Kemudahan pencarian pekerjaan hanya 1x klik</li>
            <li><i class="bi bi-check"></i> Banyak peluang dan karir yang mencerahkan masa depan</li>
          </ul>
        </div>
      </div>

      <br><br><br><br><br>
      <!-- ======= Pricing Section ======= -->
      <br>
      <section id="tentang_kami" class="tentang_kami">
        <div class="container">
          <br><br><br><br>
          <div class="section-title">
            <img src="<?= base_url('assets') ?>/start/img/Logo.svg" style="width: 40%;" class="rounded mx-auto d-block" alt="">
            <br><br><br><br>
            <p>Apeloka adalah web penyedia lowongan kerja unggulan yang dirancang untuk membantu pencari kerja menemukan pekerjaan yang sesuai dengan keterampilan dan aspirasi karir mereka. Kami menyediakan akses ke ribuan pekerjaan dari berbagai industri dan perusahaan terkemuaka. Dengan fitur pencarian canggih dan alat manajemen lamaran yang mudah digunakan,kami memudahkan pencari kerja dalam menavigasi dan melamar pekerjaan dengan cepat. Tim dukungan pelanggan kami yang responsif siap membantu pengguna dalam menjalani proses pencarian kerja. Bersama kami, Anda dapat membuka pintu menuju peluang karir yang cerah dan mencapai impian Anda dalam dunia pekerjaan</p>
          </div>



        </div>
      </section><!-- End Frequently Asked Questions Section -->
      <br><br><br><br><br><br><br><br>
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, silakan hubungi kami</p>
          </div>

          <div class="row">

            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6 info">
                  <i class="bx bx-map"></i>
                  <h4>Alamat</h4>
                  <p>Jl. Djajadiwangsa, RT.01/RW.01, Dusun II, Karanglewas Kidul, Kec. Karanglewas, Kabupaten Banyumas, Jawa Tengah 53161</p>
                </div>
                <div class="col-lg-6 info">
                  <i class="bx bx-phone"></i>
                  <h4>Kontak Kami</h4>
                  <p>+62 857-688-901560<br>+62 897-756-88660</p>
                </div>
                <div class="col-lg-6 info">
                  <i class="bx bx-envelope"></i>
                  <h4>Email Us</h4>
                  <p>Apeloka@gmail.com</p>
                </div>
                <div class="col-lg-6 info">
                  <i class="bx bx-time-five"></i>
                  <h4>Jam Kerja</h4>
                  <p> 07.00 - 15.00 WIB</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                <div class="form-group">
                  <input placeholder="Nama" type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group mt-3">
                  <input placeholder="Email" type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group mt-3">
                  <input placeholder="Keterangan" type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea placeholder="Pesan" class="form-control" name="message" rows="5" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Kamu Telah Dikirim, Terimakasih !!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Apeloka</h3>
                <p>
                  Jl. Djajadiwangsa RT.01/RW.01 <br>
                  Dusun II Karanglewas Kidul Kec.Karanglewas Kabupaten Banyumas <br>
                  Jawa Tengah 53161 <br><br>
                  <strong>Kontak Kami :</strong> +62 857-688-901560<br>
                  <strong>Email :</strong> Apeloka@gmail.com<br>
                </p>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#info_loker">Info Loker</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#contact">Hubungi Kami</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Social Media Kami</h4>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="fixed-bottom container py-4">
          <div class="copyright">

            &copy; Copyright <strong><span>Kelompok 6</span></strong>. Web Programming
          </div>

        </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="<?= base_url('assets') ?>/start/vendor/aos/aos.js"></script>
      <script src="<?= base_url('assets') ?>/start/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url('assets') ?>/start/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="<?= base_url('assets') ?>/start/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="<?= base_url('assets') ?>/start/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="<?= base_url('assets') ?>/start/js/main.js"></script>

</body>

</html>