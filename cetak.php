<?php
require "koneksi.php";

$query = "SELECT * FROM pengaduan INNER JOIN user ON user.id_user = pengaduan.id_user INNER JOIN pelanggaran on pengaduan.id_pelanggaran = pelanggaran.id_pelanggaran ORDER BY id_pengaduan DESC;";
$sql = mysqli_query($koneksi,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <center>
    <h2>Laporan Pengaduan Siswa</h2>
    <h4>Hasil Laporan Pengaduan Siswa</h4>
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Pelapor</th>
            <th>Kode Pelapor</th>
            <th>Isi Laporan</th>
            <th>Pelanggaran</th>
            <th>Poin</th>
            <th>Status</th>
        </tr>
        <?php 
        if(mysqli_num_rows($sql) > 0){
            $no = 1;
            while($data = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php 
                        if($data['status'] == "guru"){
                            $sql = mysqli_query($koneksi,"SELECT * FROM guru where id_user = '$data[id_user]';");
                            $s = mysqli_fetch_assoc($sql);
                            echo $s['kode_guru'];
                        }elseif($data['status'] == "siswa"){
                            $sql = mysqli_query($koneksi,"SELECT * FROM siswa where id_user = '$data[id_user]';");
                            $s = mysqli_fetch_assoc($sql);
                            echo $s['nis'];
                        }
                     ?></td>
                    <td><?php echo $data['deskripsi'];?></td>
                    <td><?php echo $data['pelanggaran'];?></td>
                    <td><?php echo $data['poin'];?></td>
                    <td><?php echo getStatus($data['status_pengaduan']); ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <script>
		window.print();
	</script>
</body>
</html>