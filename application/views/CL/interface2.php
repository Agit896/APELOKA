<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APELOKA</title>

  <link rel="stylesheet" href="../assets/interface2/css/style.css">
  <link rel="stylesheet" href="../assets/interface2/css/bootstrap.css">
  <link href="<?=base_url('assets/');?>apeloka.jpeg" rel="icon">

  
</head>
<body>
  <!-- bagian logo -->
  <div class="sticky-top">
    <div class=" d-flex text-align-center justify-content-center">
  <img src="../assets/interface2/img/apeloka.png" class="logo-apeloka"/>
  </div>
</div>
<!-- bagian search -->
  <p><form action="/search" method="GET" class="form-search">
    <div class="justify-content-center">
    <input type="text" id="searchInput" name="q" placeholder="Cari pekerjaan impianmu" class="input-search"></div>
<!-- bagian cari provinsi -->
    <h6 class="h6-form"><a href="#cari" class="cari">Cari Provinsi/Kota/Kabupaten</a></h6>
</form></p> 
<!-- bagian konten -->
  <p><nav>
    <div class="justify-content-evently">
    <div class="menu-box">
      <a href="menu_semua" class="menu-item"><p><img src="../assets/interface2/img/icon_semua.png" class="menu-logo"></p></a>
      <a href="#" class="menu-item"><p><img src="../assets/interface2/img/icon_sales.png" class="menu-logo"></p></a>
      <a href="#" class="menu-item"><p><img src="../assets/interface2/img/icon_pendidikan.png" class="menu-logo"></p></a>
      <a href="#" class="menu-item"><p><img src="../assets/interface2/img/icon_staff.png" class="menu-logo"></p></a>
    </div>
    <div class="menu-box">
    <a href="#" class="menu-item"><p><img src="../assets/interface2/img/icon_it.png" class="menu-logo"></p></a>
    <a href="#" class="menu-item"><p><img src="../assets/interface2/img/icon_marketing.png" class="menu-logo"></p></a>
    <a href="#" class="menu-item"><p><img src="../assets/interface2/img/icon_admin.png" class="menu-logo"></p></a>
    <a href="#" class="menu-item"><p><img src="../assets/interface2/img/icon_lainnya.png" class="menu-logo"></p></a>
    </div>
    </div>
  </nav></p>

    <nav>
    <div class="card justify-content-evently">
      <h1>Rekomendasi Lowongan</h1>
      <main class="grid">
        <a href=""><article>
          <p><img src="../assets/interface2/img/hpygng.svg" alt=""><span>dipromosikan</span></p>
          <div class="konten">
            <h3>Operator Mesin</h3>
            <h5>HappyGang||WordsHub</h5>
            <p><img src="../assets/interface2/img/ic-vacancy-salary.svg" style="width: 20px">Purbalingga, Jawa Tengah</p>
            <p><img src="../assets/interface2/img/ic-vacancy-salary.svg" style="width: 20px">SMA/SMK/Sederajat</p>
            <p><img src="../assets/interface2/img/ic-vacancy-salary.svg" style="width: 20px">Rp. 1.800.000</p>
          </div>
        </article>
       <a href=""><article>
          <p><img src="../assets/interface2/img/aksa.jpeg" alt=""><span>dipromosikan</span></p>
          <div class="konten">
            <h3>Admin</h3>
            <h5>Aksa Store</h5>
            <p><img src="../assets/interface2/img/ic-vacancy-location.svg" style="width: 20px">Banjarnegara, Jawa Tengah</p>
            <p><img src="../assets/interface2/img/ic-education.svg" style="width: 20px">SMA/SMK/Sederajat</p>
            <p><img src="../assets/interface2/img/ic-vacancy-salary.svg" style="width: 20px">Rp. 1.350.000</p>
          </div>
        </article></a> 
       <a href=""><article>
          <div>
            <h1>Lihat Lebih Banyak</h1>
          </div>
        </article></a> 
      </main>
      <h1>Dibutuhkan Segera !</h1>
      <main class="grid">
       <a href=""><article>
          <p><img src="../assets/interface2/img/chisel.svg" alt=""><span>dipromosikan</span></p>
          <div class="konten">
            <h3>Teknisi</h3>
            <h5>Chisel Computer</h5>
            <p><img src="../assets/interface2/img/ic-vacancy-location.svg" style="width: 20px">Banyumas, Jawa Tengah</p>
            <p><img src="../assets/interface2/img/ic-education.svg" style="width: 20px">Minimal D3/S1</p>
          </div>
        </article></a> 
       <a href=""><article>
          <p><img src="../assets/interface2/img/bimbel.svg" alt=""><span>dipromosikan</span></p>
          <div class="konten">
            <h3>Guru Bimbel</h3>
            <h5>Bimbel Cerdas</h5>
            <p><img src="../assets/interface2/img/ic-vacancy-location.svg" style="width: 20px">Banyumas, Jawa Tengah</p>
            <p><img src="../assets/interface2/img/ic-education.svg" style="width: 20px">SMA/SMK/Sederajat</p>
            <p><img src="../assets/interface2/img/ic-vacancy-salary.svg" style="width: 20px">Rp. 1.500.000</p>
          </div>
       </article></a> 
       <a href=""><article>
          <div>
            <h1>Lihat Lebih Banyak</h1>
          </div>
       </article></a> 
      </main>
    </div>
  </nav>
  
    <p><div class="container-content1">
      <center><h1>Loker Terpercaya di Indonesia</h1><br>
      <b><p>Temukan lowongan kerja di indonesia terpercaya hari ini. Cek info loker </p>
      <p>untuk lulusan SMA/SMK, D3, S1, Fresh graduate, dan berpengalaman terdekat </p>
      <p>di kotamu. Lamar Sekarang di Apeloka dengan hanya satu klik!</p></p></b></center>
  </div></p>
  <div class="container-content2">
        <center><select name="Lulusan  yang tersedia" class="select-lulusan">
          <option value="Lulusan  yang tersedia">Lulusan  yang Tersedia</option>
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
        <center><input type="submit" value="Kirim" class="kirim-pilihan"></center><br>
        <form class="form-footer">
          <p><p><a href="#bantuan" class="a-foot">Bantuan | Kebijakan Privasi | Syarat & Ketentuan</a></p></p>
      </form>
    </p>
</div>
        <br>
        <center><p class="p-footer">© 2023 Apeloka. All rights reserved.</p></center>
        <br>
        <p><div class="fixed-bottom">
          <h3>Masuk & lengkapi profilmu, yuk!</h3>
          <a href="<?= base_url('CL/to_login');?>"class="h5-sticky" >Klik di sini untuk masuk akun</a>
      </div></p>
</body>
</html>
