<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$no_induk=$_POST['no_induk'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$query = "INSERT INTO user(username,password,status) values ('$user','$pass','siswa')";
$sql=mysqli_query($koneksi,$query);
if ($sql)
{
    $get = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$user' AND password = '$pass';");
    if(mysqli_num_rows($get) > 0){
    	$data = mysqli_fetch_assoc($get);
    	$id_users = $data['id_user'];
    	$inserts = mysqli_query($koneksi,"INSERT INTO siswa(id_user,nis,nama_siswa,no_telp,kelas,no_induk) VALUES ('$id_users','$nik','$nama','$telp','$kelas','$no_induk');");
    	if($inserts){
    		?>
    <script type="text/javascript">
        alert ('data berhasil disimpan');
        window.location="index.php";
    </script>
<?php
    	}
    }
}
