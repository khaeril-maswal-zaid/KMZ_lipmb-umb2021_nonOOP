
<main class="container-fluid pt-4 mb-4">
			<h2 class="text-center">Setting Ruangan Ujian <br> Calon Mahasiswa Baru <?=date('Y')?></h2>
			<h5 class="text-center">Universitas Muhammadiyah Bulukumba</h5>
		 
<form action="../plugins/configurasi/proses-admin.php" method="post">	

<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Tentukan lokasi ujian peserta</strong>
		 		</div> 
		 		<div class="row px-3"> 
		 		
		 			<div class="col-sm-4"> 
		 				<div class="form-group"> 
		 					<label for="a">Lokasi ujian :</label> 
		 					<input type="" name="lokasiu" id="a" class="form-control" required value="<?=$lokasi ?>"> 
		 				</div> 
		 			</div>		 					 			
		 			<div class="col-sm-8">
						<div class="form-group"> 
		 					<label for="b"><i>Alamat lokasi :</i></label> 
		 					<input type="" name="alamatu" id="b" class="form-control" required value="<?=$alamat_lokasi ?>">		 					
		 				</div> 
					</div> 		 			
		 		</div> <!-- /Row -->
			</div> <!-- /Garis Kuning -->


		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Tentukan nama ruangan beserta nama pengawas ujian</strong>
		 		</div> 
		 		
<?php 
	$uj = 'A';
	for($i=0; $i < 10; $i++) :	
?>
		 		<div class="row px-3"> 		
		 			<div class="col-sm-2 text-center"> 
		 				<div class="form-group"> 
		 					<label>Ruangan</label> 
		 					<h2><b><?=$uj;?></b></h2>
		 				</div> 
		 			</div>
		 			<div class="offset-sm-1 col-sm-5">
						<div class="form-group"> 
		 					<label for="b">Nama Pengawas ujian :</label> 
		 					<input type="" name="pengawas<?=$uj;?>" id="b" class="form-control" required autocomplete="off" value="<?=$pws[$i] ?>">		 					
		 				</div> 
					</div> 
						<div class="col-sm-4">
						<div class="form-group"> 
		 					<label for="c">Nama gedung :</label> 
		 					<input type="" name="gedung<?=$uj;?>" id="c" class="form-control" value="<?=$valuers[$i] ?>" required autocomplete="off">	
		 				</div> 
					</div> 		 				 			
		 		</div> <!-- /Row -->
		 		<br>
<?php 
$uj++;
endfor; 
?>		 		
			</div> <!-- /Gairs Kuning -->
		
		
		 		<div class="row"> 
		 			<div class="offset-sm-1 col-sm"> 
		 					<a href="?admin=ruangan&ruangan=costum" class="btn btn-primary"> Costum </a>
		 					<a href="?admin=ruangan" class="btn btn-primary"> Seved </a>
		 					<button type="submit" name="ruangan" class="btn btn-success"><strong>SET !</strong></button>
							 <div class="btn btn-outline-secondary float-right">Last edited by <?=$valuer['edited']?></div>
						 </div>
		 		</div>
	
		</form>
</main> <!-- End Container -->
		 
 
 
 
		 			
		 			
		 			
		 			
		 			
		 			
		 			