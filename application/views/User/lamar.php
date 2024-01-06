<div class="container-fluid">
    <br>
    <h3>Tambah Data</h3>
    <hr> 

    <form action="<?= base_url('user/user/'); ?>" method="post" enctype="multipart/form-data"> 
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="" name="nama_lengkap">
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Pendidikan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="" name="jenjang_pendidikan">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal lahir</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" required="" name="tanggal_lahir">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="" name="jenis_kelamin">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
      <input type="text" class="form-control " required="" name="alamat">
    </div>
  </div>



  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">No Wa/Handphone</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="no_wa">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Masukan File</label>
    <div class="col-sm-5">
      <input type="file" class="form-control" name="userfile"  >
    </div>
</div>


<button type="submit" class="btn btn-primary">Tambah</button>
<button type="reset" class="btn btn-danger">Reset</button>
</form>
</div>