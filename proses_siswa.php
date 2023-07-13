<?php 
require 'koneksi.php';

if(isset($_GET['proses'])){
if($_GET['proses'] == 'edit_siswa'){
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN user ON siswa.id_user = user.id_user where id_siswa = '$id';");
    if(mysqli_num_rows($sql) > 0){
        $data = mysqli_fetch_assoc($sql);
        ?>
    <div class=" card card-shadow">
    <div class="card-header">
        Edit Siswa
</div>
<div class="card-body">
    <form action="proses_siswa.php" method="post" >
        <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'];?>">
         <input type="hidden" name="id_user" value="<?php echo $data['id_user'];?>">
        <div class="form-group cols-sm-6">
            <label>NIS</label>
            <input type="text" value="<?php echo $data['nis'];?>" name="nis" class="form-control" required>
        </div>
        <div class="form-group cols-sm-6">
            <label>NAMA</label>
            <input type="text" value="<?php echo $data['nama_siswa'];?>" name="nama" class="form-control" required>
        </div>
        <div class="form-group cols-sm-6">
            <label>Kelas</label>
            <input type="text" value="<?php echo $data['kelas'];?>" name="kelas" class="form-control" readonly>
        </div>
             <div class="row">
                <div class="col-md-6">
                    <div class="form-group cols-sm-6">
                        <label>No Telp</label>
                        <input type="text" value="<?php echo $data['no_telp'];?>" name="no_telp" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group cols-sm-6">
                        <label>Email</label>
                        <input type="text" value="<?php echo $data['email'];?>" name="email" class="form-control" required>
                    </div>
                </div>
                
            
            </div>
       
        
         <div class="form-group cols-sm-6">
            <label>Username</label>
            <input type="text" value="<?php echo $data['username'];?>" name="username" class="form-control" required>
        </div>
        <div class="form-group cols-sm-6">
            <label>Password</label>
            <input type="text" value="<?php echo $data['password'];?>" name="password" class="form-control" required>
        </div>
        <div class="form-group cols-sm-6">
            <label>Status</label>
            <input type="text" value="<?php echo $data['status'];?>" name="status" class="form-control" readonly>
        </div>
        <div class="form-group col-sm-6">
            <input type="submit" value="Edit" name="edit_siswa" class="btn btn-primary">
            <input type="reset" value="kosongkan" class="btn btn-warning">
        </div>
    </form>
</div>
    <?php 
    }
}
if($_GET['proses'] == 'delete_siswa'){
    $id = $_GET['id'];
    $selectsiswa = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa = '$id';");
    if(mysqli_num_rows($selectsiswa) > 0){
        $datasiswa = mysqli_fetch_assoc($selectsiswa);
        $id_users = $datasiswa['id_user'];
        $sql = mysqli_query($koneksi,"DELETE FROM user WHERE id_user = '$id_users';");
    if($sql){
         $sql1 = mysqli_query($koneksi,"DELETE FROM siswa WHERE id_siswa = '$id';");
         if($sql1){
            ?>
        <script type="text/javascript">
            alert ('Hapus Data Berhasil');
            window.location="siswa.php?url=data_siswa";
        </script>
    <?php
         }
        
        }
    }

    
}
?><?php
    
}

if(isset($_POST['edit_siswa'])){
    $id = $_POST['id_user'];
    $id_siswa = $_POST['id_siswa'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $kelas = $_POST['kelas'];

    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $sql = mysqli_query($koneksi,"UPDATE user SET username = '$username',password = '$password',status = '$status' WHERE id_user = '$id';");
    if($sql){
        $sql1 = mysqli_query($koneksi,"UPDATE siswa SET nis = '$nis',nama_siswa = '$nama',kelas = '$kelas',no_telp = '$no_telp',email = '$email' WHERE id_siswa = '$id_siswa';");
        if($sql1){
            ?>
        <script type="text/javascript">
            alert ('Edit Data Berhasil');
            window.location="siswa.php?url=data_siswa";
        </script>
<?php
        }
        
    }
}

