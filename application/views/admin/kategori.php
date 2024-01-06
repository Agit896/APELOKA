
<div class="main--content" style="background-image: url('../assets/bg.jpg')">
        <div class="header--wrapper">
            <div class="header--title">
                <span><img src="<?=base_url('assets/');?>Logo.svg" style="width: 120px;"alt="Apeloka"></span>
                <h2><?= $section ?></h2>
            </div>
            <div class="user--info">
                
               <span style="margin-left: 20px;"><i class="fas fa-user"></i></span>
            </div>
        </div>
        
<!-- Begin Page Content -->
<div class="iklan--wrapper " style="background-image: url('../assets/bg.jpg')">
<div class="container-fluid" style="background-image: url('../assets/bg.jpg')">
    
    <div class="row">
        <div class="col-lg-3">
           
          
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-file-alt"></i>Tambah Data
                </button>
            <?php echo $this->session->flashdata('pesan'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($kategori as $k) :?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $k['nama_kategori']; ?></td>
                            <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $k['id_kategori']; ?>">
                            Edit
                            </button>
                            <a href="<?php echo base_url()?>admin/iklan/hapus_kategori/<?php echo $k['id_kategori'];?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- Modal Tambah data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-10" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open_multipart('admin/iklan/Kategori'); ?>
      <div class="modal-body">
      

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" name="nama_kategori">
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
</div>

<!-- modal Edit Data -->

<?php $no=0;
foreach($kategori as $k) : $no++; ?>
<div class="modal fade" id="editmodal<?php echo $k['id_kategori']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-10" id="exampleModalLabel">Edit Data Kategori</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open_multipart('admin/iklan/updateKategori'); ?>
      <div class="modal-body">
      
      <input type="hidden" name="id_kategori" value="<?php echo $k['id_kategori']; ?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" required="" name="nama_kategori" value="<?php echo $k['nama_kategori']; ?>">
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
</div>
<?php endforeach;?>