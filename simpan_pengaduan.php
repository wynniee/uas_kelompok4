<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
require 'koneksi.php';
$tgl=date('Y/m/d h:i:s');

$id_user = $_SESSION['id_user'];
$nik=$_POST['nik'];
$terlapor=$_POST['terlapor'];
$pelanggaran = $_POST['pelanggaran'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

$sql=mysqli_query($koneksi, "INSERT INTO pengaduan (id_user,tanggal,nama_pengaduan,deskripsi,foto,status_pengaduan,id_pelanggaran,terlapor) VALUES
('$id_user','$tgl','$isi','$isi','$ft','$st','$pelanggaran','$terlapor');");
move_uploaded_file($file,"foto/".$ft);

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('data berhasil disimpan, terimakasih sudah melapor');
        window.location="siswa.php";
    </script>
<?php
}
?>