<?php 
require 'koneksi.php';

if(isset($_GET['proses'])){
    if($_GET['proses'] == 'tambah_pelanggaran'){
        ?>
        <div class=" card card-shadow">
        <div class="card-header">
            Tambah Pelanggaran
    </div>
    <div class="card-body">
        <form action="proses_pelanggaran.php" method="post" >
            
            <div class="form-group cols-sm-6">
                <label>Pelanggaran</label>
                <input type="text" name="pelanggaran" class="form-control" required>
            </div>
            <div class="form-group cols-sm-6">
                <label>Poin</label>
                <input type="number" name="poin" class="form-control" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="submit" value="Simpan" name="simpan_pelanggaran" class="btn btn-primary">
                <input type="reset" value="kosongkan" class="btn btn-warning">
            </div>
        </form>
    </div>
    
        <?php
    }
    
if($_GET['proses'] == 'edit_pelanggaran'){
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi,"SELECT * FROM pelanggaran where id_pelanggaran = '$id';");
    if(mysqli_num_rows($sql) > 0){
        $data = mysqli_fetch_assoc($sql);
        ?>
    <div class=" card card-shadow">
    <div class="card-header">
        Edit Pelanggaran
</div>
<div class="card-body">
    <form action="proses_pelanggaran.php" method="post" >
        <input type="hidden" name="id_pelanggaran" value="<?php echo $data['id_pelanggaran'];?>">
        <div class="form-group cols-sm-6">
            <label>Pelanggaran</label>
            <input type="text" value="<?php echo $data['pelanggaran'];?>" name="pelanggaran" class="form-control" required>
        </div>
        <div class="form-group cols-sm-6">
            <label>Poin</label>
            <input type="number" value="<?php echo $data['poin'];?>" name="poin" class="form-control" required>
        </div>
        <div class="form-group col-sm-6">
            <input type="submit" value="Edit" name="edit_pelanggaran" class="btn btn-primary">
            <input type="reset" value="kosongkan" class="btn btn-warning">
        </div>
    </form>
</div>
    <?php 
    }
}
if($_GET['proses'] == 'delete_pelanggaran'){
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi,"DELETE FROM pelanggaran WHERE id_pelanggaran = '$id';");
    if($sql){
        ?>
        <script type="text/javascript">
            alert ('Hapus Data Berhasil');
            window.location="siswa.php?url=data_pelanggaran";
        </script>
<?php
    }
}
?><?php
    
}

if(isset($_POST['edit_pelanggaran'])){
    $id = $_POST['id_pelanggaran'];
    $pelanggaran = $_POST['pelanggaran'];
    $poin = $_POST['poin'];
    $sql = mysqli_query($koneksi,"UPDATE pelanggaran SET pelanggaran = '$pelanggaran',poin = '$poin' WHERE id_pelanggaran = '$id';");
    if($sql){
        ?>
        <script type="text/javascript">
            alert ('Edit Data Berhasil');
            window.location="siswa.php?url=data_pelanggaran";
        </script>
<?php
    }
}
if(isset($_POST['simpan_pelanggaran'])){
    $pelanggaran = $_POST['pelanggaran'];
    $poin = $_POST['poin'];
    $sql = mysqli_query($koneksi,"INSERT INTO pelanggaran(pelanggaran,poin) VALUES ('$pelanggaran','$poin');");
    if($sql){
        ?>
        <script type="text/javascript">
            alert ('Tambah Data Berhasil');
            window.location="siswa.php?url=data_pelanggaran";
        </script>
<?php
    }
}
