
<main class="container-fluid pt-4 mb-4">
			<h2 class="text-center">Setting Tahapan Pendaftaran <br> Calon Mahasiswa Baru <?=date('Y')?></h2>
			<h5 class="text-center">Universitas Muhammadiyah Bulukumba</h5>
		 
<form action="../plugins/configurasi/proses-admin.php" method="post">	
<?php
	$i=0;
	$b=0;
	
	while ($i < 3) :
	$a=$i+1;	
?>
		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Gelombang <?=$a;?></strong>
		 		</div> 
		 		<div class="row px-3"> 
		 		
		 			<div class="offset-sm-1 col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="a<?=$a?>">Tanggal & waktu Awal Pendaftaran :</label> 
		 					<input type="datetime-local" name="awal<?=$a;?>" id="a<?=$a?>" class="form-control" required value="<?=$values[$i+$b];?>"> 
		 				</div> 
		 			</div>		 					 			
		 			<div class="col-sm-5">
						<div class="form-group"> 
		 					<label for="b<?=$a?>">Tanggal & waktu Akhir Pendaftaran :</label> 
		 					<input type="datetime-local" name="akhir<?=$a;?>" id="b<?=$a?>" class="form-control" required value="<?=$values[$i+$b+1];?>">		 					
		 				</div> 
					</div> 		 			
		 		</div> <!-- /Row -->
		 		
		 		<div class="row px-3"> 
		 			<div class="offset-sm-1 col-sm-5">
		 				<div class="form-group"> 
		 					<label for="c<?=$a?>">Tanggal & waktu Test Peserta:</label> 
		 					<input type="datetime-local" name="ujian<?=$a;?>" id="c<?=$a?>" class="form-control" required value="<?=$values[$i+$b+2];?>"> 
		 				</div> 
		 			</div> 
		 			<div class="col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="d<?=$a?>">Tanggal & waktu Pengumuman :</label> 
		 					<input type="datetime-local" name="pengumuman<?=$a;?>" id="d<?=$a?>" class="form-control" required value="<?=$values[$i+$b+3];?>"> 
						 </div> 
		 			</div>		 							
				</div>	<!-- /Row -->
			</div> <!-- /Gairs Kuning -->
<?php 
	$i++;
	$b=$b+3;
	endwhile;	
?>			 
		 		<div class="row"> 
		 			<div class="offset-sm-1 col-sm-11"> 
		 					<a href="?admin=tahapan&tahapan=costum" class="btn btn-primary"> Costum </a>
		 					<a href="?admin=tahapan" class="btn btn-primary"> Seved </a>
		 					<button type="submit" name="tahapan" class="btn btn-success"><strong>SET !</strong></button>
							<div class="btn btn-outline-secondary float-right">Last edited by <?=$value['edited']?></div>
						 </div>
		 		</div>
	
		</form>
		
		
		
		<form action="../plugins/configurasi/proses-admin.php" method="post">	
		
		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Tahapan khusus waktu ujian</strong>
		 		</div> 
		 		
		 		<div class="row px-3"> 
		 			<div class="offset-sm-1 col-sm-5">
		 				<div class="form-group"> 
		 					<label for="c">Waktu Start Validasi :</label> 
		 					<input type="time" name="start_validasi" id="c" class="form-control" required value="<?=$valueuj[1]?>"> 
		 				</div> 
		 			</div> 
		 			<div class="col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="d">Waktu Finis Validasi :</label> 
		 					<input type="time" name="finis_validasi" id="d" class="form-control" required value="<?=$valueuj[2]?>"> 
		 				</div> 
		 			</div>		 							
				</div>	<!-- /Row -->			
		 		
		 		<div class="row px-3"> 		 		
		 			<div class="offset-sm-1 col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="a">Waktu Start Ujian (Waktu test Gel.1)</label> 
		 					<input type="time" readonly name="start_ujian" id="a" class="form-control" required value="<?=$value['waktu_test_gel_1']?>"> 
		 				</div> 
		 			</div>		 					 			
		 			<div class="col-sm-5">
						<div class="form-group"> 
		 					<label for="b">Waktu Finis Ujian :</label> 
		 					<input type="time" name="finis_ujian" id="b" class="form-control" required value="<?=$valueuj[4]?>">		 					
		 				</div> 
					</div> 		 			
		 		</div> <!-- /Row -->
		 		
		 		<div class="row px-3"> 
		 			<div class="offset-sm-1 col-sm-5">
		 				<div class="form-group"> 
		 					<label for="c">Waktu Start Wawancara :</label> 
		 					<input type="time" name="start_wawancara" id="c" class="form-control" required value="<?=$valueuj[5]?>"> 
		 				</div> 
		 			</div> 
		 			<div class="col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="d">Waktu Finis Wawancara :</label> 
		 					<input type="time" name="finis_wawancara" id="d" class="form-control" required value="<?=$valueuj[6]?>"> 
		 				</div> 
		 			</div>		 							
				</div>	<!-- /Row -->			
			</div> <!-- /Gairs Kuning --> 	
			
			<div class="row"> 
		 			<div class="offset-sm-1 col-sm-11"> 
		 					<a href="?admin=tahapan&tahapan=costum" class="btn btn-primary"> Costum </a>
		 					<a href="?admin=tahapan" class="btn btn-primary"> Seved </a>
		 					<button type="submit" name="tahapan-u" class="btn btn-success"><strong>SET !</strong></button>
							<div class="btn btn-outline-secondary float-right">Last edited by <?=$valueu['edited']?></div>
						 </div>
		 		</div>
	
		</form>
</main> <!-- End Container -->
		 
 
 
 
		 			
		 			
		 			
		 			
		 			
		 			
		 			