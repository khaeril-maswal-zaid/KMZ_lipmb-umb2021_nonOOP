<main class="container-fluid pt-4 mb-4">
	<h2 class="text-center">Setting Syarat & Prosedur Pendaftaran<br> Calon Mahasiswa Baru Tahun <?=date('Y')?></h2>
	<h5 class="text-center">Universitas Muhammadiyah Bulukumba</h5>
		 
	<form action="../plugins/configurasi/proses-admin.php" method="post">	
		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 	<div class="alert alert-primary"> 
				<strong>Ketikkan Syarat & prosedur pendaftaran</strong>
			</div> 
		 		
			<div class="offset-sm-1 col-sm-10"> 
				<div class="form-group">
					<textarea name="spp" class="form-control" required rows="17"><?=$valuespp['spp'];?></textarea>
				</div> 
			</div>		 					 			
					
			<div class="col-sm-12">
				<p class="m-0 p-0">
					<b class="text-danger">Catatan pengetikan SPP :</b><br>
					- Untuk menggunakan fungsi Baris baru (Enter) gunakan karakter <b>' ; '</b> (titik koma). <br>	 
				</div>		
			</div> <!-- /Gairs Kuning -->
			
					 
			<div class="row"> 
				<div class="offset-sm-1 col-sm-11">
					<button type="submit" name="sspp" class="btn btn-success"><strong>SET !</strong></button>
					<div class="btn btn-outline-secondary float-right">Last edited by <?=$valuespp['edited']?></div>
				</div>
			</div>

		</form>
</main> <!-- End Container -->
		 
 
 
 
		 			
		 			
		 			
		 			
		 			
		 			
		 			