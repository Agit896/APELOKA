

<div class="main--content" style="background-image: url('.../assets/bg.jpg')">
<div class="card-body">
        <div class="header--wrapper">
            <div class="header--title">
                <span><img src="<?=base_url('assets/');?>Logo.svg" style="width: 120px;"alt="Apeloka"></span>
                <h2><?= $section ?></h2>
            </div>
            <div class="user--info">
                
               <span style="margin-left: 20px;"><i class="fas fa-user"></i></span>
            </div>
        </div>

<div class="container-flex">
    <div class="card shadow mb-4">
        <div class="iklan--wrapper">
            <div class="iklan--title">
                <h2>Data Tabel</h2><br>
            
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
                </button>
               
            </div>
            <div class="user--info">
                <form action="" method="post">
                    <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search" name="keyword">
                    <button type="submit" class="btn btn-success">cari</button>
                </div>
            </form>
                
            </div>
        </div>
<div>
  <div>
<div class="iklan--wrapper">
<div class="table-responsive">
<div style="overflow-y:scroll;max-height:425px;">
    <?php echo $this->session->flashdata('pesan'); ?>
   <table class="table mt-3" id="dataTable" cellspacing="0" cellpadding="3" style="table-Layout:fixed; word-wrap: break-word;">
    <thead>
        <tr>
            <th ">No</th>
            <th ">Pekerjaan</th>
            <th ">Nama Perusahaan</th>
            <th ">Lokasi</th>
            <th ">Minimal Pendidikan</th>
            <th ">Gaji</th>
            <th ">Minimal Pengalaman</th>
            <th ">Deskripsi</th>
            <th ">Gambar</th>
            <th ">Aksi</th>
            
            <!-- <th class="col">Kategori</th> -->
        </tr>
    </thead>
    <tbody>
    <?php 
    $no=1;
    foreach($iklan as $ikl) 
    {
    ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td ><?php echo $ikl['judul']; ?></td>
            <td ><?php echo $ikl['perusahaan']; ?></td>
            <td ><?php echo $ikl['lokasi']; ?></td>
            <td ><?php echo $ikl['pendidikan']; ?></td>
            <td ><?php echo $ikl['gaji']; ?></td>
            <td ><?php echo $ikl['pengalaman']; ?></td>
            <td ><?php echo $ikl['deskripsi']; ?></td>
            <td ><picture> <source srcset="" type="image/jpeg"> 
            <img width="250" src="<?= base_url('assets/admin/img/gambar/') . $ikl['gambar'];?>" class="img-fluid img-thumbnail" alt="..."> 
            </picture></td>
            <td >
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $ikl['id_iklan']; ?>">
                Edit
                </button>
            <a href="<?php echo base_url()?>admin/iklan/hapus_data/<?php echo $ikl['id_iklan'];?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

    <?php } ?>
    </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-10" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('admin/iklan'); ?>" method="post" enctype="multipart/form-data"> 
      <div class="modal-body">
      
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="judul" name="judul" placeholder="Masukan Judul">
    </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="perusahaan" name="perusahaan" placeholder="Masukan Nama Perusahaan">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
    <select name="id_kategori" class="form-control"> 
 <option value="">--Pilih Kategori--</option> 
 <?php foreach ($kategori as $k) { ?> 
 <option value="<?= $k['id_kategori'];?>"><?= $k['nama_kategori'];?></option> 
 <?php } ?> 
 </select> 
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="lokasi" name="lokasi" placeholder="Masukan Lokasi">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="pendidikan" name="pendidikan" placeholder="Pendidikan">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="number" class="form-control " required="" id="gaji" name="gaji" placeholder="Masukan Gaji">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
    <select name="gender" id="gender" class="form-control"> 
 <option value="">--Gender--</option> 
 
 <option value="Laki">Laki</option> 
 <option value="Perempuan">Perempuan</option> 
 <option value="Laki/Perempuan">Laki/Perempuan</option> 
 </select> 
    </div>
  </div>


  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pengalaman" name="pengalaman" placeholder="Masukan Pengalaman">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Isi Deskripsi">
    </div>
  </div>

  <div class="row mb-3">

    <div class="col-sm-10">
      <input type="file" class="form-control" id="gambar" name="gambar" size="20" required>
    </div>
</div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal -->

<!-- modal edit -->
<?php $no=0;
foreach($iklan as $ikl) : $no++; ?>
<div class="modal fade" id="editmodal<?php echo $ikl['id_iklan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-10" id="exampleModalLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <?php echo form_open_multipart('admin/iklan/ubahIklan'); ?>

      <input type="hidden" name="id_iklan" value="<?php echo $ikl['id_iklan']; ?>">
      
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="judul" name="judul" placeholder="Masukan Judul" value="<?php echo $ikl['judul']; ?>">
    </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="perusahaan" name="perusahaan" placeholder="Masukan Nama Perusahaan" value="<?php echo $ikl['perusahaan']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
    <select name="id_kategori" class="form-control"> 
 <option value="">--Pilih Kategori--</option> 
 <?php foreach ($kategori as $k) { ?> 
 <option value="<?= $k['id_kategori'];?>"><?= $k['nama_kategori'];?></option> 
 <?php } ?> 
 </select> 
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="lokasi" name="lokasi" placeholder="Masukan Lokasi" value="<?php echo $ikl['lokasi']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?php echo $ikl['pendidikan']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="number" class="form-control " required="" id="gaji" name="gaji" placeholder="Masukan Gaji" value="<?php echo $ikl['gaji']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
    <select name="gender" id="gender" class="form-control"> 
 <option value=""><?php echo $ikl['gender']; ?></option> 
 
 <option value="Laki-Laki">Laki-Laki</option> 
 <option value="Perempuan">Perempuan</option> 
 <option value="Laki/Perempuan">Laki/Perempuan</option> 
 </select> 
    </div>
  </div>


  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pengalaman" name="pengalaman" placeholder="Masukan Pengalaman" value="<?php echo $ikl['pengalaman']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Isi Deskripsi" value="<?php echo $ikl['deskripsi']; ?>">
    </div>
  </div>

  <div class="row mb-3">

    <div class="col-sm-10">
      <input type="file" class="form-control" id="gambar" name="gambar" size="20" ><br>
      <img src="<?php echo base_url() . '/assets/admin/img/gambar/' . $ikl['gambar'];?>" width="200">
    </div>
</div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>