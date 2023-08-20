<?php
	include '../../../configurasi/query_for_export.php';
	header("Content-disposition: attachment; filename = lampiran_pengumuman_gel_".$_GET['gel'].'_'.$x);
?>

<!doctype html>
<html lang="en">
	<head>
	</head>

	<body>
		<h2>
			LAMPIRAN 1 NO: <?=$valuesk['no_sk'] ?><br>
			PENGUMUMAN HASIL PENERIMAAN MAHASISWA BARU PROGRAM STRATA SATU (S1) <br>UNIVERSITAS MUHAMMADIYAH BULUKUMBA TAHUN 
			<?=date('Y')," / ",date('Y')+1,"<br>";
				if(isset($_GET['gel'])){
					echo "GELOMBANG ".$_GET['gel'];
				}else{
					echo "SEMUA GELOMBANG";
				}
			?>
		</h2>

		<table border="1" style="width : 1000px">
			<tr class="thhead">
				<th class="no">NO</th>
				<th class="nama"> Nama<br>Lengkap</th>
				<th class="no_peserta"> NO <br>Peserta</th>
				<th class="no_hp"> NO HP</th>
				<th class="tanggal"> Tanggal<br>Lahir</th>
				<th class="kuliah">Pilihan<br>Kuliah</th>
				<th class="prody"> Prodi</th>
				<th class="ket">Ket</th>
			</tr>
									
			<?php 
				$No=1;		
				foreach( $datacamaba_pendaftaran as 	$dtcmb ) :

				$pilkul = $dtcmb["file_3"];
				$y = explode(':',$pilkul);
				$yy = $y[0].':<br>'.$y[1];

				if($pilkul == 'FAK. Tekhnik : Perencanaan Wilayah dan Kota') {
					$yy = 'FAK. Tekhnik :<br>Perencanaan<br>Wilayah dan Kota';
				}elseif($pilkul == 'FAK. FKIP : Pend. Bahasa Indonesia') {
					$yy = 'FAK. FKIP :<br>Pend. Bahasa<br>Indonesia';
				}elseif($pilkul == 'FAK. FKIP : Pend. Bahasa Inggris') {
					$yy = 'FAK. FKIP :<br>Pend. Bahasa<br>Inggris';
				}
			?>

			<tr class="thbody">
				<td><?=$No?></th>
				<td><?=$dtcmb["nama_lengkap"]?></td>
				<td><?=$dtcmb["no_peserta"]?></td>
				<td>'<?=$dtcmb["no_hp"]?></td>
				<td><?=$dtcmb["tanggal_lahir"]?></td>
				<td><?=$dtcmb["pilihan_kuliah"]?></td>
				<td><?=$yy?></td>
				<td></td>
			</tr>

			<?php
				$No++;
				endforeach;
			?>
		</table>
	</body>
</html>
