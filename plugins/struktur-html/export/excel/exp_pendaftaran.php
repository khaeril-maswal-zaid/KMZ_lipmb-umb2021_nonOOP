<?php
	include '../../../configurasi/query_for_export.php';
	header("Content-disposition: attachment; filename = Pendaftaran_gel_".$_GET['gel'].'_'.$x);
?>

<!doctype html>
<html lang="en">
	<head>
	</head>

	<body>
		<h2>
            DATABASES PENDAFTARAN CALON MAHASISWA BARU<br>
            UNIVERSITAS MUHAMMADIYAH BULUKUMBA
            <?php
                if(isset($_GET['gel'])){
                    echo "GELOMBANG ".$_GET['gel']."<br> TAHUN ".date('Y');
                }else{
                    echo "SEMUA GELOMBANG <br> TAHUN ".date('Y');
                }
            ?>
        </h2>

		<table border="1" style="width : 1300px">
			<tr>
				<th>NO</th>
				<th>Tgl Daftar</th>          
				<th>Nama Lengkap</th>
				<th>NO Peserta</th>
				<th>Tanggal Lahir</th>           
				<th>Pilihan Kuliah</th>                                                                                       
				<th>Pil. Prodi 1</th>
				<th>Pil. Prodi 2</th>
				<th>Ket</th>                                                                                   
			</tr>
                                   
			<?php 
				$No=1;			
				foreach( $datacamaba_pendaftaran as 	$dtcmb ) :
			?>

			<tr>
				<td><?=$No; ?></td>
				<td><?=$dtcmb["tgl_fix"]; ?></td>
				<td><?=$dtcmb["nama_lengkap"]; ?></td>
				<td><?=$dtcmb["no_peserta"]; ?></td>
				<td><?=$dtcmb["tanggal_lahir"]; ?></td>
				<td><?=$dtcmb["pilihan_kuliah"]; ?></td>
				<td><?=$dtcmb["pilihan_1"]; ?></td>                                                                                      
				<td><?=$dtcmb["pilihan_2"]; ?></td>
				<td></td>                                                                                   
			</tr>
																													
			<?php 
				$No++;
				endforeach; 
			?>
		</table>
	</body>
</html>