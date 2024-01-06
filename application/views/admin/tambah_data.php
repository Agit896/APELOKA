<div class="container-fluid">
    <br>
    <h3>Tambah Data</h3>
    <hr> 

<form method="post" action="<?php echo base_url('admin/admin/proses_tambah_data'); ?>">
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Masukan Gambar</label>
    <div class="col-sm-5">
      <input type="file" class="form-control" name="userfile" size="20" required>
    </div>
</div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="" name="judul">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="" name="perusahaan">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="" name="lokasi">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Pendidikan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="" name="pendidikan">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Gaji</label>
    <div class="col-sm-5">
      <input type="number" class="form-control " required="" name="gaji">
    </div>
  </div>

<!-- <div class="row mb-3">
<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
<div class="col-sm-5">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" name="jenis_kelamin">
  <label class="form-check-label" for="flexCheckDefault">
    Laki-Laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" name="jenis_kelamin" >
  <label class="form-check-label" for="flexCheckChecked">
    Perempuan
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" name="jenis_kelamin" >
  <label class="form-check-label" for="flexCheckChecked">
    Laki-Laki/Perempuan
  </label>
</div>
</div>
</div> -->

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Pengalaman</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="pengalaman">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="deskripsi">
    </div>
  </div>

  <!-- <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
    <select class="col-sm-5"  name="id_kategori">
        <option selected>Open this select menu</option>
        <option value="">One</option>
        <option value="">Two</option>
        <option value="">Three</option>
    </select>
  </div> -->
<button type="submit" class="btn btn-primary">Tambah</button>
<button type="reset" class="btn btn-danger">Reset</button>
</form>
</div>