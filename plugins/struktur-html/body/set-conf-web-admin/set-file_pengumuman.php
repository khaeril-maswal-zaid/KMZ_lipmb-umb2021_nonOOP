
<main class="container-fluid pt-4 mb-4">
			<h2 class="text-center">Setting Lamp. File Pengumuman <br> Calon Mahasiswa Baru <?=date('Y')?></h2>
			<h5 class="text-center">Universitas Muhammadiyah Bulukumba</h5>
		 
<form action="../plugins/configurasi/proses-admin.php" method="post" enctype="multipart/form-data">	

		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Masukkan</strong>
		 		</div> 
		 		<div class="row px-3"> 
		 		
		 			<div class="offset-sm-1 col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="a">Nama Rektor :</label> 
		 					<input type="" name="nama" id="a" class="form-control" required value="<?=$valuesks[1]?>"> 
		 				</div> 
		 			</div>		 					 			
		 			<div class="col-sm-5">
						<div class="form-group"> 
		 					<label for="b">NBM Rektor :</label> 
		 					<input type="" name="nbm" id="b" class="form-control" required value="<?=$valuesks[6]?>">		 					
		 				</div> 
					</div> 		 			
		 		</div> <!-- /Row -->
		 		
		 		<div class="row px-3"> 
		 			<div class="offset-sm-1 col-sm-5">
		 				<div class="form-group"> 
		 					<label for="c">Di tetapkan di :</label> 
		 					<input type="" name="ditetapkan" id="c" class="form-control" required value="<?=$valuesks[3]?>"> 
		 				</div> 
		 			</div> 
		 			<div class="col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="d">Pada tanggal :</label> 
		 					<input type="" name="pada" id="d" class="form-control" required value="<?=$valuesks[4]?>"> 
		 				</div> 
		 			</div>		 							
				</div>	<!-- /Row -->
			</div> <!-- /Gairs Kuning -->
			
			<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>File SK Rektor pengumuman</strong>
		 		</div> 
		 		<div class="row px-3"> 
		 		
		 			<div class="offset-sm-1 col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="a">Unggah SK Rektor :</label> 
		 					<input type="file" name="sk" id="a" class="form-control"> 
		 				</div> 
		 			</div>
		 			
		 			<div class="col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="a">No SK Rektor:</label> 
		 					<input type="" name="no_sk" id="a" class="form-control" required value="<?=$valuesks[2]?>"> 
		 				</div> 
		 			</div>		 		 			 		 	
		 		</div> <!-- /Row -->

			
			<div class="col-sm-12">
		 			<p class="m-0 p-0">
		 				<b class="text-danger">Catatan Upload SK :</b><br>
		 				- Setiap mengunggah file yang baru maka file sebelumnya akan tertimpa (Terganti). <br>
						- File senantiasa dangan nama "SK-Rektor Pengumuman.pdf". <br>
		 			</div>							
				</div>	<!-- /Row -->
			</div> <!-- /Gairs Kuning -->
			
					 
		 		<div class="row"> 
		 			<div class="offset-sm-1 col-sm-11"> 
		 					<a href="?admin=lamp&lamp=costum" class="btn btn-primary"> Costum </a>
		 					<a href="?admin=lamp" class="btn btn-primary"> Seved </a>
		 					<button type="submit" name="f-pengumuman" class="btn btn-success"><strong>SET !</strong></button>
							 <div class="btn btn-outline-secondary float-right">Last edited by <?=$valuesk['edited']?></div>
						 </div>
		 		</div>
	
		</form>
</main> <!-- End Container -->
		 
 
 
 
		 			
		 			
		 			
		 			
		 			
		 			
		 			