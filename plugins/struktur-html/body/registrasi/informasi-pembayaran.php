<div class="container pt-4">
			<h2 class="text-center">SLIP INFORMASI PEMBAYARAN PENDAFATARAN</h2>
			<h5 class="text-center">Calon mahasiswa baru Universitas Muhammadiyah Bulukumba 2020</h5>
			
			<div class="bg-white my-3 p-2 border border-warning rounded-top">
				<div class="row"> 
		 			<div class="col-sm-12 text-center">
		 				<img src="../plugins/assets/image/umb.png" width="85">
		 				<h4 class="my-2 text-primary"><b>LIPMB UMB</b></h4>
		 				<p class="d-inline">Terima kasih telah melakukan registrasi di UM Bulukumba. <br>
		 				Selanjutnya silahkan melakukan pembayaran pendaftaran di Bank Mandiri Syariah atau <br> 
		 				Transfer ke No Rek. <p class="d-inline text-info">1506201302.</p> an. 
		 				<p class="d-inline text-info"> STKIP Muhammadiyah Bulukumba </p> <br>		 				
		 				kemudian komfirmasi di No WA <?=$valuea['wa'] ?> (<?=$valuea['nama'] ?>) <br>
		 				<p class="d-inline text-danger">
		 				Sebagai syarat untuk mendapatkan username dan Password login pendaftaran
		 				</p>
		 				</p>
		 			</div>
		 		</div>
			</div>
			
			<div class="bg-white my-3 px-2 border border-warning rounded-top">
				<div class="row"> 
					<div class="col-12 text-center">
						<h5 class="my-2"><b>Catatan :</b></h5>
					</div>
				</div>

				<div class="row pt-2"> 
					<div class="col-1 text-right">-</div>
		 			<div class="col-10">
					 	<span>Transfer dapat dilakukan dari BANK manapun.</span>
					</div>
				</div>

				<div class="row">
					<div class="col-1 text-right">-</div>
		 			<div class="col-10">
						<span>Kode BSM</span> <span class=" text-info">451 </span>
						<span class=" text-danger">(Khusus yang transfer dari Non BANK Mandiri Syariah).</span> 		 
					</div>
				</div>
				
				<div class="row">
					<div class="col-1 text-right">-</div>
		 			<div class="col-10">
						<span>Jika transfer menggunakan via Non Teller (</span>
						<span class="text-info">ATM, Link, Bangkin, Mobile</span>
						<span>) maka tidak dianjurkan menggunakan</span>
						<span class="text-danger">selain dari pada milik peserta atau milik Orang Tua.</span>		 			 
					</div>
				</div>
				
				<div class="row mb-4">
					<div class="col-1 text-right">-</div>
		 			<div class="col-10">
					 	<span>Komfirmasi pembayaran tidak meski menggunakan No HP dari Peserta</span> 			 
					</div> 
		 		</div>
			</div>
			
			<div class="bg-white my-3 p-2 border border-warning rounded-top">
			<div class="row"> 
		 			<div class="col-sm-12 text-center">
		 				<h5 class="my-2"><b>Informasi akun anda</b></h5>
		 			</div>
			 </div>
			 
			<div class="row p-2"> 
				<div class="col-5 text-right">
					<h5>Nama Lengkap</h5>
				</div>
				<div class="col-6">
					<h5>: <?php echo $_SESSION["regis"]["nama"]; ?>
				</div>
			 
				<div class="col-5 text-right">
					<h5>NO HP</h5>
				</div>
				<div class="col-6">
					<h5>: <?php echo $_SESSION["regis"]["telpon"]; ?> </h5>
				</div>
			
				<div class="col-5 text-right">
					<h5>Username</h5>
				</div>
				<div class="col-6">
					<h5>: (Silahkan membayar terlebih dahulu)</h5>
				</div>
			 
				<div class="col-5 text-right">
					<h5>Password</h5>
				</div>
				<div class="col-6">
					<h5>: (Silahkan membayar terlebih dahulu)</h5>
				</div>
			</div>
		</div>
			
			<div class="bg-white my-3 p-2 border border-warning rounded-top">
			<div class="row"> 
		 			<div class="col-sm-12 text-center">
		 				<h5 class="my-2"><b>Nominal pembayaran</b></h5>
		 			</div>
		 			
		 			<div class="col-sm-12 text-center">
		 				<h3 class="text-danger 150 mt-2 mb-0"><b><?=$valuea['biaya']?></b></h5>
		 				<h4 class = "text-info"><i><?=$valuea['terbilang']?></i></h4>
		 			</div>
		 	</div>
		 	</div>
		
		<div class="bg-white my-3 p-2 border border-warning rounded-top">
			<div class="row"> 
		 			<div class="col-sm-12 text-center">
		 				<h5 class="my-2"><b>Format Komfimasi Pembayaran</b></h5>
		 			</div>
		 			
		 			<div class="text-center col-sm-12">
		 				<h5 class="mt-2">
		 					Salam.<br>
		 					Nama : (Nama Anda)<br>
		 					NIK : (Nik Anda)<br>
		 					No HP  : (No HP Anda)<br>
		 					(Lampiran File Slip Pembayaran) 
		 					
		 					<br><br>
		 					
		 					Contoh : <br> 
		 					Assalamualaikum Warahmatullahi Wabaraqatuh. <br>
		 					Nama : Khaeril Maswal Zaid<br>
		 					NIK : 7302070703990002<br>
		 					No HP : 085343652494
		 				</h5>	
		 				<code><b>Atau </b></code>
		 				<a href="https://api.whatsapp.com/send?phone=<?=$valuea['wa'] ?>&text=Assalamualaikum%20Warahmatullahi%20Wabaraqatuh.%0A%0ASaya%20calon%20mahasiswa%20baru%20*Universitas%20Muhammadiyah%20Bulukumba*%20mau%20melakukan%20komfirmasi%20pembayaran%20pendaftaran%20sebesar%20*<?=$valuea['biaya']?>*.%0A%0A_Dengan%20identitas%20:_%0ANama%20%20%20:%20<?= $_SESSION['regis']['nama']; ?>%0ANIK%20%20%20%20%20%20%20:%20<?=$_SESSION['regis']['ktp']; ?>%0ANo%20Hp%20%20:%20<?=$_SESSION['regis']['telpon']; ?>%0A%0A@LIPMB-Team"> Klik disini!</a>	 
		 			</div>
		 	</div>
		 	</div> 	
		 	
		</div> <!-- End Container -->