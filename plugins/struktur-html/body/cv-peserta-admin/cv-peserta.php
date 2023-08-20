<main id="trg-exp-pdf" class="container rounded shadow position-relative cv_peserta">
	<section class="position-relative">
		<div class="row pt-5">		
			<div class="offset-sm-8 col-sm-6">
				<h5>Tgl dfr. <?=$dtcmb["tgl_daftar"]; ?></h5>
			</div>
			
			<div class="col-sm-5 pl-5">
				<h3><b>Bio data lengkap</b></h3>
			</div>
			
			<div class="offset-sm-3 col-sm-4">
				<h5>No ps. <b>220-51-25-1</b></h5>
			</div>
			
		<hr class="a mt-0 mb-0">
		<hr class="b mt-1 mb-0">				
		</div>
	</section>
		
	<section class="position-relative">
		<div class="row mt-4">
			<div class="offset-1">
				<h5 class="text-white py-1 px-2 border border-warning rounded bg-primary shadow">Data diri pribadi : </h5>	
			</div>
		</div>

		<div class="row">
			<div class="col-4 offset-1">
				<ul class="pl-3">
					<li>NIK</li>
					<li>Nama Lengkap</li>
					<li>Tempat / Tanggal Lahir</li>
					<li>Jenis Kelamin</li>
					<li>Email</li>
					<li>No Hp / WA</li>
					<li>Agama</li>
					<li>Alamat</li>
				</ul>
			</div>

			<div class="col-4">
				<div>: <b><?=$dtcmb["no_ktp"]; ?></b></div>
				<div>: <?=$dtcmb["nama_lengkap"]; ?></div>
				<div>: <?=$dtcmb["tempat_lahir"]; ?>/ <?=$dtcmb["tanggal_lahir"]; ?></div>
				<div>: <?=$dtcmb["jenis_kelamin"]; ?></div>
				<div>: <?=$dtcmb["tanggal_lahir"]; ?></div>
				<div>: <?=$dtcmb["no_hp"]; ?></div>					
				<div>: <?=$dtcmb["agama"]; ?></div>
				<div>: <?=$dtcmb["alamat"]; ?>, Kab. <?=$dtcmb["kabupaten"]; ?></div>
			</div>

			<div class="col-3">
				<img src="../plugins/inputan-user/foto-peserta/<?=$dtcmb['file_1']; ?>" height="180">		
			</div>
		</div>		

		<div class="row mt-4">
			<div class="offset-1">
				<h5 class="text-white py-1 px-2 border border-warning rounded bg-primary shadow">Data diri Orang Tua : </h5>	
			</div>
		</div>

		<div class="row">
			<div class="col-4 offset-1">
				<ul class="pl-3">
					<li>Nama Orang Tua :
						<ul class="">
							<li>Ayah</li>
							<li>Ibu</li>
						</ul>
					</li>
					<li>Pekerjaan Ortu :
						<ul class="">
							<li>Ayah</li>
							<li>Ibu</li>
						</ul>
					</li>
					<li>No HP Ortu :
						<ul class="">
							<li>Ayah</li>
							<li>Ibu</li>
						</ul>
					</li>
					<li>Gaji Ortu :
						<ul class="">
							<li>Ayah</li>
							<li>Ibu</li>
						</ul>
					</li>
					<li>Jumlah Saudara</li>
					<li>Anak ke</li>
				</ul>
			</div>

			<div class="col-6">
				<br>
				<div>: <?=$dtcmb["nama_ayah"]; ?></div>
				<div>: <?=$dtcmb["nama_ibu"]; ?></div>
				<br>
				<div>: <?=$dtcmb["pekerjaan_ayah"]; ?></div>
				<div>: <?=$dtcmb["pekerjaan_ibu"]; ?></div>
				<br>
				<div>: <?=$dtcmb["hp_ayah"]; ?></div>
				<div>: <?=$dtcmb["hp_ibu"]; ?></div>					
				<br>
				<div>: <?=$dtcmb["gaji_ayah"]; ?></div>
				<div>: <?=$dtcmb["gaji_ibu"]; ?></div>
				<div>: <?=$dtcmb["saudara"]; ?></div>
				<div>: <?=$dtcmb["anak_ke"]; ?></div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="offset-1">
				<h5 class="text-white py-1 px-2 border border-warning rounded bg-primary shadow">Data asal sekolah : </h5>	
			</div>
		</div>

		<div class="row">
			<div class="col-4 offset-1">
				<ul class="pl-3">
					<li>NISN</li>
					<li>Nama Sekolah</li>
					<li>Jurusan</li>
					<li>tahun Lulus</li>
				</ul>
			</div>

			<div class="col-6">
				<div>: <?=$dtcmb["nisn"]; ?></div>
				<div>: <?=$dtcmb["nama_sekolah"]; ?></div>
				<div>: <?=$dtcmb["jurusan"]; ?></div>
				<div>: <?=$dtcmb["tahun_lulus"]; ?></div>
			</div>
		</div>
	</section>
			
	<img class="background position-absolute opacity-5" src="../plugins/assets/image/umb.png">
	</main>
	
	<button class="btn btn-danger m-3" id="tbl-exp-pdf">Download PDF</button>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	