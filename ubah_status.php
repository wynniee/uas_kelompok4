<?php 

require 'koneksi.php';

$id_pengaduan = $_GET['id_pengaduan'];
$status = $_GET['status'];
$query = mysqli_query($koneksi,"UPDATE pengaduan SET status_pengaduan = '$status' WHERE id_pengaduan = '$id_pengaduan';");
if($query){
		$sqls = mysqli_query($koneksi,"SELECT * FROM pengaduan INNER JOIN siswa ON pengaduan.terlapor = siswa.id_siswa INNER JOIN pelanggaran ON pengaduan.id_pelanggaran = pelanggaran.id_pelanggaran WHERE pengaduan.id_pengaduan = '$id_pengaduan' ;");
		if(mysqli_num_rowS($sqls) > 0){
				$datas = mysqli_fetch_assoc($sqls);
				$poinsiswa = $datas['poin_siswa'];
				$poin = $datas['poin'];
				$newpoints = $poinsiswa - $poin;
				if($status == 1){
					$quest = mysqli_query($koneksi,"UPDATE siswa SET poin_siswa = '$newpoints' WHERE id_siswa = '$datas[terlapor]';");
					if($quest){
					?>
					    <script type="text/javascript">
					        alert ('Berhasil Merubah Status');
					        window.location="siswa.php?url=lihat_pengaduan";
					    </script>
		
					<?php
					}
				}else{
					?>
					    <script type="text/javascript">
					        alert ('Berhasil Merubah Status');
					        window.location="siswa.php?url=lihat_pengaduan";
					    </script>
		
					<?php
				}
				
				
			}
	 
}

 ?>