<?php 
require 'koneksi.php';

if(isset($_GET['proses'])){
    if($_GET['proses'] == 'tambah_user'){
        ?>
        <div class="card card-shadow">
        <div class="card-header text-bold">
            Tambah User
    </div>
    <div class="card-body">
 
        <form action="proses_user.php" method="post" >
            
            <div class="form-group cols-sm-6">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group cols-sm-6">
                <label>Password</label>
                <input type="text" name="password" class="form-control" required>
            </div>
            <div class="form-group cols-sm-6">
                <label>Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                </select>
            </div>
            <div class="form-group col-sm-6">
                <input type="submit" value="Simpan" name="simpan_user" class="btn btn-primary">
                <input type="reset" value="kosongkan" class="btn btn-warning">
            </div>
        </form>
    </div>
    
        <?php
    }
    
if($_GET['proses'] == 'edit_user'){
    $id = $_GET['id_user'];
    $sql = mysqli_query($koneksi,"SELECT * FROM user where id_user = '$id';");
    if(mysqli_num_rows($sql) > 0){
        $data = mysqli_fetch_assoc($sql);
        ?>
    <div class="card-shadow">
    <div class="card-header">
        Edit User
</div>
<div class="card-body">
    <form action="proses_user.php" method="post" >
        <input type="hidden" name="id_user" value="<?php echo $data['id_user'];?>">
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
            <input type="submit" value="Edit" name="edit_user" class="btn btn-primary">
            <input type="reset" value="kosongkan" class="btn btn-warning">
        </div>
    </form>
</div>
    <?php 
    }
}
if($_GET['proses'] == 'delete_user'){
    $id = $_GET['id_user'];
    $sql = mysqli_query($koneksi,"DELETE FROM user WHERE id_user = '$id';");
    if($sql){
        ?>
        <script type="text/javascript">
            alert ('Hapus Data Berhasil');
            window.location="siswa.php?url=data_user";
        </script>
<?php
    }
}
?><?php
    
}

if(isset($_POST['edit_user'])){
    $id = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $sql = mysqli_query($koneksi,"UPDATE user SET username = '$username',password = '$password',status = '$status' WHERE id_user = '$id';");
    if($sql){
        ?>
        <script type="text/javascript">
            alert ('Edit Data Berhasil');
            window.location="siswa.php?url=data_user";
        </script>
<?php
    }
}
if(isset($_POST['simpan_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $kode = rand(999,999999);
    $sql = mysqli_query($koneksi,"INSERT INTO user(username,password,status) VALUES ('$username','$password','$status');");
    if($sql){
        if($status == "guru"){
            $selectusers = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username' AND password = '$password' AND status = '$status';");
            $datausers = mysqli_fetch_assoc($selectusers);
            $insertguru = mysqli_query($koneksi,"INSERT INTO guru(id_user,kode_guru,nama_guru,no_telp) VALUES ('$datausers[id_user]','$kode','$username','-');");
    }
        ?>
        <script type="text/javascript">
            alert ('Tambah Data Berhasil');
            window.location="siswa.php?url=data_user";
        </script>
<?php
    }
}
