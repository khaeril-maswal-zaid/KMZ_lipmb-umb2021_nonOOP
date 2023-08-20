<main id="trg-exp-pdf" class="kartu_peserta test container rounded bg-white p-0 mt-5" style="width: 690px!important;">
	<section>
		<div class="row pt-5">			
			<div class="col-1 p-0 ml-5 mr-3">
				<img src="../plugins/assets/image/umb.png" width="80">
			</div>
			
			<div class="col-9 p-0">	
				<div class="text-center">
					<h4>
						<b>LEMBAGA INFORMASI<br>
							DAN PENERIMAAN MAHASISWA BARU<br>
							UNIVERSITAS MUHAMMADIYAH BULUKUMBA</b>
					</h4>			
				</div>
			</div>
			<hr class="a mt-0 mb-0">
			<hr class="b mt-1 mb-0">				
		</div>
			
		<div class="row">
			<div class="col-12">
				<div class="text-center pt-4">
					<h4>
						<b>Kartu Peserta Ujian</b>
					</4>
					<hr class="py-0 my-0">							
				</div>
			</div>			
		</div>
	</section>
		
	<section class="section1">
		<div class="float-right pr-3">
			<img src="../plugins/inputan-user/foto-peserta/<?=$dtcmb['file_1']; ?>" width="80">
		</div>
		
		<div class="row mt-3">
			<div class="col-4 offset-2">
				<div class="text-right">No Peserta :
			</div>
		</div>
			
		<div class="col-4">
			<b><?=$dtcmb["no_peserta"];?></b>
		</div>
			
		<div class="col-4 offset-2">
			<div class="text-right">Nama Lengkap:</div>
		</div>
			
		<div class="col-5">
			<?=$dtcmb["nama_lengkap"]; ?>
		</div>
			
		<div class="col-4 offset-2">
			<div class="text-right">Jenis Kelamin :</div>
		</div>
			
		<div class="col-5">
			<?=$dtcmb["jenis_kelamin"]; ?>
		</div>
			
		<div class="col-4 offset-2">
			<div class="text-right"> Lahir :</div>
		</div>
			
		<div class="col-5">
			<?=$dtcmb["tanggal_lahir"]; ?>
		</div>
			
		<div class="col-4 offset-2">
			<div class="text-right">No Hp / WA :</div>
		</div>
			
		<div class="col-5">
			<?=$dtcmb["no_hp"]; ?>
		</div>
			
		<div class="col-4 offset-2">
			<div class="text-right">Pilihan Kuliah :</div>
		</div>
			
		<div class="col-5">
			<b><?=$dtcmb["pilihan_kuliah"]; ?></b></div>					
		</div>
	</section>
		
	<section class="pt-4 pb-3">
		<div class="row">
			<div class="col-6 pl-2 pr-0 border-right border-dark">
				<div class="row">
					<div class="offset-3 col-9 p-0">
						<b>Program Studi Pilihan : </b>
					</div>
									
					<div class="offset-2 col-3 p-0 text-right">
						<h6>Pilihan 1:</h6>
					</div>
					
					<div class="col-7 pl-2">
						<h6><?=$dtcmb["pilihan_1"]; ?></h6>
					</div>
					
					<div class="offset-2 col-3 p-0 text-right">
						<h6>Pilihan 2:</h6>
					</div>
					
					<div class="col-7 pl-2">
						<h6><?=$dtcmb["pilihan_2"]; ?></h6>
					</div>	
				</div>																
			</div>
			
			<div class="col-6">
				<div class="row">
					<div class="col-10">
						<b>Saat ujian peserta wajib membawa :</b>
					</div>									
					<div class="col-10">
						<h6 class="pl-3">1. Kartu ujian ini</h6>
					</div>								
					<div class="col-10">
						<h6 class="pl-3">2. Tanda pengenal (KTP/SIM/KTS)</h6>
					</div>	
					<div class="col-10">
						<h6 class="pl-3">2. Pensil 2B dan Alat Tulis lainnya</h6>
					</div>																
				</div>						
			</div>																				
		</div>
	</section>
		
	<table class="text-center" border="1" align="center">
		<thead>
			<tr height="35">
				<th colspan="4">Jadwal ujian</th>
			</tr>
			<tr height="40"> 
				<th width="130">Tanggal</th> 
				<th width="110">Jam (WITA)</th> 
				<th width="130">Kegiatan</th>
				<th width="90">Ruangan</th>  
			</tr> 
		</thead> 

		<tbody>
			<tr height="37">   
				<td rowspan="3">
					<?php 
						$exno = explode('-',$dtcmb["no_peserta"]);
						$exno = end($exno);
						$tgl = $value['test_gel_'.$exno];
						
						echo tgl_ina(date($tgl));
					?>	
				</td> 
				<td><?=$valueu['start_validasi']," - ", $valueu['finish_validasi']?></td>
				<td>Validasi kartu ujian</td>
				<td rowspan="3"><?=$dtcmb["file_4"]; ?></td> 
			</tr> 
			<tr height="37">
				<td><?=$valueu['start_ujian']," - ", $valueu['finish_ujian']?></td> 
				<td>Tes Ujian Tertulis</td> 
			</tr>
			<tr height="37">
				<td><?=$valueu['start_wawancara']," - ", $valueu['finish_wawancara']?></td> 
				<td>Tes Wawancara</td> 
			</tr>
		</tbody> 
	</table>

	<div class="row">
		<div class="offset-1 col-11 pl-4 pt-4">
			<span class="text- "><b>Catatan :</b></span>
			<ol>
				<li>Lokasi ujian bertempat di <?=$valuer['lokasi']; ?>, <?=$valuer['alamat_lokasi']; ?>.</li>
				<li>Berpakaian sopan dan rapi (Hitam Putih).</li>
				<li>Mematuhi protokol kesehatan.</li>
			</ol>
		</div>
	</div>
</main>


<button class="btn btn-danger m-3" id="tbl-exp-pdf"><b>Unduh PDF</b></button>


