<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Detail pengaduan</h6>
            </div>
<div class="card-body">
<div class="form-group cols-sm-6">
<a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
    <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">kembali</span>
    </a>
    </div>        
        <?php
        require 'koneksi.php';
        $id_pengaduan = $_GET['id'];
        $status_pengaduan = 0;
        $sql=mysqli_query($koneksi, "SELECT * FROM pengaduan INNER JOIN pelanggaran on pengaduan.id_pelanggaran = pelanggaran.id_pelanggaran INNER JOIN siswa ON pengaduan.terlapor = siswa.id_siswa WHERE id_pengaduan='$_GET[id]';");
        $data=mysqli_fetch_array($sql);
        if ($sql)
        {
            $status_pengaduan = $data['status_pengaduan'];
        ?>
        <div class="form-group cols-sm-6">
    <label>tanggal pengaduan</label>
    <input type="text" name="tgl_pengaduan" value="<?php echo $data['tanggal']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
    <div class="row">
        <div class="col-md-8">
             <label>Pelanggaran</label>
            <input type="text" name="pelanggaran" value="<?php echo $data['pelanggaran']; ?>" class="form-control" readonly>
        </div>
        <div class="col-md-4">
            <label>Poin</label>
            <input type="text" name="poin" value="<?php echo $data['poin']; ?>" class="form-control" readonly>
        </div>
    </div>
    </div>
    <div class="form-group cols-sm-6">
    <label>Siswa Terlapor</label>
    <input type="text" name="siswa_terlapor" value="<?php echo $data['nama_siswa']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
    <label>tulis laporan</label>
    <textarea class="form-control" rows="7" name="isi_laporan" readonly><?php echo $data['deskripsi']; ?></textarea>
        </div>
        <div class="form-group cols-sm-6">
            <div class="row">
                <div class="col-md-6">
                    <label>bukti foto</label>
                    <div>
                      <?php if($data['foto'] != null || !empty($data['foto'])){
                        ?>
                 <img src="foto/<?php echo $data['foto']; ?>" style="width: 20%;height: 20%;">
                        <?php

                        }else{
                          ?>
                            <p>Tidak Ada Foto</p>
                          <?php
                        } 

                      ?>
                    </div>
                </div>
            </div>
            </div>
        <?php } ?>
    
   
</div>
