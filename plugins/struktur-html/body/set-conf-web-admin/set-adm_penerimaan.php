
<main class="container-fluid pt-4 mb-4">
			<h2 class="text-center">Setting Admin Penererimaan <br> Calon Mahasiswa Baru <?=date('Y')?></h2>
			<h5 class="text-center">Universitas Muhammadiyah Bulukumba</h5>
		 
<form action="../plugins/configurasi/proses-admin.php" method="post">	

		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Identitas Admin</strong>
		 		</div> 
		 		<div class="row px-3"> 
		 		
		 			<div class="offset-sm-1 col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="a">Nama Admin :</label> 
		 					<input type="" name="nama" id="a" class="form-control" required value="<?=$valueas[1] ?>"> 
		 				</div> 
		 			</div>		 					 			
		 			<div class="col-sm-5">
						<div class="form-group"> 
		 					<label for="b">Devisi :</label> 
		 					<input type="" name="devisi" id="b" class="form-control" required value="<?=$valueas[2] ?>">		 					
		 				</div> 
					</div> 		 			
		 		</div> <!-- /Row -->
		 		
		 		<div class="row px-3"> 
		 			<div class="offset-sm-1 col-sm-5">
		 				<div class="form-group"> 
		 					<label for="c">No Identitas (NIK atau lainnya) :</label> 
		 					<input type="" name="nik" id="c" class="form-control" required value="<?=$valueas[3] ?>"> 
		 				</div> 
		 			</div> 
		 			<div class="col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="d">No HP /WA :<br>
		 					 </label> 
		 					<input type="" name="wa" id="d" class="form-control" required value="<?=$valueas[4] ?>" placeholder="Exp: 6285343652494"> 
		 				</div>			
		 			</div>
		 			
		 			<div class="col-sm-12">
		 			<p class="m-0 p-0">
		 				<b class="text-danger">Catatan No HP (WA) :</b><br>
		 				- Pastikan No HP telah terhubung ke WhatsApp. <br>
		 				- Penulisan didahului dengan '62'.<br> 
		 				- Tidak mencamtungkan 'Kode plus (+)', 'Garis datar (-)' maupun 'Space'.<br>
		 				- Selanjutnya lakukan test koneksi dengan menekan tombol dibawah. <br>
		 				- Sebelum menekan tombol cek koneksi pastikan telah men-SET semua data. <br></p>
		 				<p class="text-info mb-0">Example No WA: 6285343652494</p>	
		 			</div>							
				</div>	<!-- /Row -->
			</div> <!-- /Gairs Kuning -->
			
			<div class="row"> 
		 			<div class="offset-sm-1 col-sm-6">			
		 					<a href="https://api.whatsapp.com/send?phone=<?=$valueas[4] ?>&text=Assalamualaikum%20Warahmatullahi%20Wabaraqatuh.%0A%0A@LIPMB-Team"" class="btn btn-warning"><b>Cek Koneksi</b></a>
		 				</div>
		 		</div>
					 
			<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Jumlah biaya pendaftaran camaba</strong>
		 		</div> 
		 		<div class="row px-3"> 
		 		
		 			<div class="col-sm-4"> 
		 				<div class="form-group"> 
		 					<label for="a">Jumlah biaya :</label> 
		 					<input type="" name="biaya" id="a" class="form-control" required value="<?=$valueas[5] ?>"> 
		 				</div> 
		 			</div>		 					 			
		 			<div class="col-sm-8">
						<div class="form-group"> 
		 					<label for="b"><i>Terbilang :</i></label> 
		 					<input type="" name="terbilang" id="b" class="form-control" required value="<?=$valueas[6] ?>">		 					
		 				</div> 
					</div> 		 			
		 		</div> <!-- /Row -->
			</div> <!-- /Gairs Kuning -->
					 	 
			
		 		<div class="row"> 
		 			<div class="offset-sm-1 col-sm-11"> 
		 					<a href="?admin=admin&adminp=costum" class="btn btn-primary"> Costum </a>
		 					<a href="?admin=admin" class="btn btn-primary"> Seved </a>
		 					<button type="submit" name="admin-p" class="btn btn-success"><strong>SET !</strong></button>
							<div class="btn btn-outline-secondary float-right">Last edited by <?=$valuea['edited']?></div>
		 				</div>
		 		</div>
	
		</form>
</main> <!-- End Container -->
		 
 
 
 
		 			
		 			
		 			
		 			
		 			
		 			
		 			