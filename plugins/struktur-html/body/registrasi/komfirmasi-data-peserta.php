<div class="container pt-4" id="komfirmasi-data-peserta">
	<h2 class="text-center">INFORMASI BIODATA</h2>
	<h5 class="text-center">Calon mahasiswa baru Universitas Muhammadiyah Bulukumba 2020</h5>
				
	<div class="bg-white my-3 p-2 border border-warning rounded-top">
		<div class="row"> 
			<div class="col-sm-12 text-center">
				<img src="../plugins/assets/image/umb.png" width="85">
				<h4 class="my-2 text-primary"><b>LIPMB UMB</b></h4>
				<h5>Silahkan validasi kembali data anda 
				</h5>		 				
			</div>
		</div>
	</div>
		 	
	<div class="bg-white my-3 p-2 border border-warning rounded-top">
		<div class="row"> 
			<div class="col-sm-12 text-center"><h5 class="my-2"><b>Biodata Peserta</b></h5></div>
		</div>
		
		<?php 
			$aseng = ['Nama Lengkap :', 'NIK :', 'Tempat / Tanggal Lahir :', 'Alamat Email :', 'No HP :', 'Agama :', 'Jenis Kelamin :', 'Alamat :'];

			$ise = ['nama', 'ktp', 'tempat', 'alamatemail', 'telpon', 'agama', 'jk', 'alamat'];
			
			for($i=0; $i<8; $i++) :
		?>
		<div class="row"> 
			<div class="col-sm-5 text-right">
				<h5><?=$aseng[$i] ?></h5>
			</div>
			<div class="col-sm-7">
				<h5> <?php echo $_SESSION["regis"][$ise[$i]];
						if($i==2){
							$tgl = explode('-',$_SESSION["regis"]['tanggal']);
							echo ' / ',$tgl[2],'-',$tgl[1],'-',$tgl[0];
						}
						elseif($i==8){
							echo ', Kab. ', $_SESSION["regis"]['kota'], 
							', Prov. ', $_SESSION["regis"]['provinsi'];
						} 
					?>
				</h5>
			</div>
		</div>
			<?php endfor; ?>
	</div>	
			
	<div class="bg-white my-3 p-2 border border-warning rounded-top">
		<div class="row"> 
			<div class="col-sm-12 text-center"><h5 class="my-2"><b>Data Orang Tua</b></h5></div>
		</div>
		
		<?php 
			$aseng2 = ['Nama Ayah :', 'Nama Ibu :', 'Pekerjaan Ayah :', 'Pekerjaan Ibu :', 'No HP Ayah :', 'No HP Ibu :', 'Gaji Ayah :', 'Gaji Ibu :', 'Jumlah saudara :' ,'Anak ke :'];
			$ise2 = ['namaayah', 'namaibu', 'pkayah', 'pkibu', 'noayah', 'noibu', 'gajiayah', 'gajiibu', 'saudara', 'ke'];
			for($i=0; $i<10; $i++) :
		?>
		
		<div class="row"> 
			<div class="col-sm-5 text-right">
				<h5><?=$aseng2[$i] ?></h5>
			</div>
			<div class="col-sm-7">
				<h5> <?php echo $_SESSION["regis"][$ise2[$i]];?>
				</h5>
			</div>
		</div>
		<?php endfor; ?>
	</div>
		 	
	<div class="bg-white my-3 p-2 border border-warning rounded-top">	
		<div class="row"> 
			<div class="col-sm-12 text-center">
				<h5 class="my-2"><b>Data Sekolah</b></h5>
			</div>
		</div>

		<?php 
			$aseng3 = ['No NISN :', 'Nama Sekolah :', 'Jurusan :', 'Jumlah Tahun Lulus :'];
			$ise3 = ['nisn', 'namasekolah', 'jurusan', 't_lulus'];
			for($i=0; $i<4; $i++) :
		?>
		
		<div class="row"> 
			<div class="col-sm-5 text-right">
				<h5><?=$aseng3[$i] ?></h5>
			</div>
			<div class="col-sm-7">
				<h5> <?php echo $_SESSION["regis"][$ise3[$i]];?>
				</h5>
			</div>
		</div>
		<?php endfor; ?>
	</div>
		 	
	<a href="?ulangi=registrasi" class="btn btn-info btn-sm">Ulangi</a>
	<a href="../plugins/configurasi/proses-user.php" class="btn btn-warning btn-sm"><b>Save</b></a>		 
</div> <!-- End Container -->