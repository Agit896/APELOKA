
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
<div class="iklan--wrapper ">
<div class="container-fluid">
    
    <div class="row">
        <div class="col-lg-3">
           
          
            <?php echo $this->session->flashdata('pesan'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">File</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($pelamar as $plm) :?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $plm['nama_lengkap']; ?></td>
                            <td><?= $plm['jenjang_pendidikan']; ?></td>
                            <td><?= $plm['tanggal_lahir']; ?></td>
                            <td><?= $plm['jenis_kelamin']; ?></td>
                            <td><?= $plm['alamat']; ?></td>
                            <td><?= $plm['no_wa']; ?></td>
                            <td><?= $plm['cv']; ?></td>
                            <td>
                            <a href="<?= base_url('uploads/' . $plm['cv']); ?>"> Download </a>
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


