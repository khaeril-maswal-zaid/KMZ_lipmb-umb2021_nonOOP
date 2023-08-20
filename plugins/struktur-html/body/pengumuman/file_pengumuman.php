<main role="main" class="container-fluid py-3 mb-0">
  <section class="jumbotron text-center pt-5 pb-3">
   	<div class="container">
     <h1>File Lampiran Pengumuman</h1>
      <p class="lead text-muted">Calon Mahasiswa baru oleh Lembaga Informasi Penerimaan Mahasiswa Baru (LIPMB) Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
      <p>        
        <a href="?pengumuman=file&gel=1" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='1') {echo "active";} ?> btn-outline-success my-2">Gel. 1</a>
        <a href="?pengumuman=file&gel=2" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='2') {echo "active";} ?> btn-outline-success my-2">Gel. 2</a>
        <a href="?pengumuman=file&gel=3" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='3') {echo "active";} ?> btn-outline-success my-2">Gel. 3</a>
        <a href="?pengumuman=file" class="btn <?php if (!isset($_GET['gel'])) {echo "active";} ?> btn-outline-primary my-2">Semua Gel.</a>
      </p> 
    </div>
  </section>
</main>
  
<main role="main" id="trg-exp-pdf" class="file_pengumuman shadow container rounded">
	<section>
		<div class="row pt-4 px-5">							
			<div class="lampiran col-sm-12 pb-0 mb-0">	
				<p class="pb-0 mb-0"><b> LAMPIRAN 1 NO: <?=$valuesk['no_sk'] ?><br>
					PENGUMUMAN HASIL PENERIMAAN 
					MAHASISWA BARU PROGRAM STRATA SATU (S1) 
					<?php
						if(isset($_GET['gel'])){
							echo "GELOMBANG ".$_GET['gel'];
						}else{
							Echo "SEMUA GEL.";
						}
					?>
 					UNIVERSITAS MUHAMMADIYAH BULUKUMBA TAHUN <?=date('Y')," / ",date('Y')+1?></b></p>			
			</div>
				
			<hr class="c m-0 ml-3">				
		</div>
	</section>
			
	<section class="mt-4" style="text">
		<table class="file_pengumuman" align="center" border="1">
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
				foreach( $datacamaba_pendaftaran as $dtcmb ) :
					$pilkul = $dtcmb["file_3"];
					$y = explode(':',$pilkul);
					
					//PILIH
					if(isset($y[1])){
						$yy = $y[0].':<br>'.$y[1];
					}elseif(!isset($y[1])){
						$yy = $y[0];
					}

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
				<td><?=$dtcmb["no_hp"]?></td>
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

		<div class="row">
			<div class="offset-sm-7 col-sm-2 px-0 mt-4">
				<h6 class="p-0 m-0">Ditetapkan di</h6> 
				<h6 class="p-0 m-0">Pada tanggal</h6>
			</div>
			<div class="col-sm-3 px-0 pt-4">
				<h6 class="p-0 m-0">: <?=$valuesk['ditetapkan'] ?></h6> 
				<h6 class="p-0 m-0">: <?=$valuesk['pada'] ?>
				</h6>
			</div>
		</div>
		
		<div class="row">
			<div class="offset-sm-7 col-sm-4 px-0 mt-3">
				<h6>Ketua</h6>
				<h6 class="mt-5 mb-0"><b><u><?=$valuesk['nama_rektor'] ?></u><b></h6>
				<h6 class="p-0 m-0">NBM : <?=$valuesk['nbm'] ?></h6>
			</div>
		</div>
	</section>			
</main>		

<button class="btn btn-outline-danger btn-lg shadow mb-3 mt-4 ml-3" id="tbl-exp-pdf"><b>Export PDF</b></button>

<a href="../plugins/struktur-html/export/excel/exp_lamp_pengumuman.php<?php if(isset($_GET['gel'])){echo "?gel=".$_GET['gel'];};?>" class="btn btn-success btn-lg shadow mb-3 mt-4 ml-3" ><b>Export Excel</b></a>












		
		
		
		