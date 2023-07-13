<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

if ($cek>0)
{
    $data=mysqli_fetch_assoc($sql);
    session_start();
    $_SESSION['nama']=$user;
    $_SESSION['status']=$data['status'];
    $_SESSION['id_user'] = $data['id_user'];
    if($data['status'] == 'siswa'){
        $querys = mysqli_query($koneksi,"SELECT * FROM ".$data['status']." where id_user = ".$data['id_user'].";");
        $s = mysqli_num_rows($querys);
        if($s > 0){
            $datas = mysqli_fetch_assoc($querys);
            $_SESSION['nik'] = $datas['nis'];
        }
    }else{
        $_SESSION['nik'] = $data['username'];
    }
    
  
    header('location:siswa.php');
}
else
{
    ?>
    <script type="text/javascript">
        alert ('username atau password tidak ditemukan');
        window.location="index.php";
    </script>
<?php
}
?>