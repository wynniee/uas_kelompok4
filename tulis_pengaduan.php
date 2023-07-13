<?php require 'koneksi.php'; ?>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tulis pengaduan</h6>
            </div>
<div class="card-body">
    <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group cols-sm-6">
    <label>tanggal pengaduan</label>
    <input type="text" name="tgl_pengaduan" value="<?php  echo date('d/m/Y h:i:s'); ?>" class="form-control" readonly>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group cols-sm-6">
                    <label>Terlapor</label>
                    <select name="terlapor" id="terlapor" class="form-control" data-live-search="true" required>
                        <?php 
                        
                        $sqls = mysqli_query($koneksi,"SELECT * FROM siswa;");
                        if(mysqli_num_rows($sqls) > 0){
                            while($datas = mysqli_fetch_array($sqls)){
                                ?>
                                <option value="<?php echo $datas['id_siswa']; ?>"><?php echo $datas['nama_siswa']; ?> ( <?php echo $datas['kelas']; ?> )</option>
                                <?php
                            }
                        }
                         ?>
                        
                    </select>
                </div>
            </div>
        </div>
   
        <div class="form-group cols-sm-6">
            <label>Pelanggaran</label>
            <select name="pelanggaran" id="pelanggaran" data-live-search="true" class="form-control" required>
                <?php 
               
                $sql = mysqli_query($koneksi,"SELECT * FROM pelanggaran;");
                if(mysqli_num_rows($sql) > 0){
                    while($datas = mysqli_fetch_array($sql)){
                        ?>
                        <option value="<?php echo $datas['id_pelanggaran']; ?>"><?php echo $datas['pelanggaran']; ?> ( Poin <?php echo $datas['poin']; ?> )</option>
                        <?php
                    }
                }
                 ?>
                
            </select>
        </div>
        <div class="form-group cols-sm-6">
    <label>tulis laporan</label>
    <textarea class="form-control" rows="7" name="isi_laporan"></textarea>
        </div>
        <div class="form-group cols-sm-6">
    <label>unggah foto</label>
    <input type="file" name="foto" class="form-control" accept=".jpg,.jpeg,.png,.gif"><font color="red">
        tipe yang bisa diupload adalah : .jpg,.jpeg,.png,.gif</font>
        </div>

        <div class="form-group col-sm-6">
            <input type="submit" value="simpan" class="btn btn-primary">
            <input type="reset" value="kosongkan" class="btn btn-warning">
        </div>
    </form>
</div>

