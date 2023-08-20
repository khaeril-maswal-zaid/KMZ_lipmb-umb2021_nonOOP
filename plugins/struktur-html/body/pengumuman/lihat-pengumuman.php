<form action="../plugins/configurasi/proses-user.php" id="form" method="post">
		 <div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-<?=$ket[1] ?>"> 
		 			<strong><?=$ket[0] ?></strong>	
		 		</div> 
		 		
		 		<div class="row px-3"> 
		 			<div class="col-sm-7"> 
		 				<div class="form-group"> 
		 					<label for="a">Nomor Peserta :</label> 
		 					<input type="text" name="no_peserta" id="a" maxlength="50" class="form-control" placeholder="Sesuai yang tercantum di kartu ujian" autocomplete="off" autofocus required <?=$ket[2]?>> 
		 				</div> 		 			
		 		</div> 
		 		
		 		<div class="col-sm-5"> 
		 				<div class="form-group"> 
		 					<label for="b"> Tanggal Lahir :</label> 
		 					<input type="date" name="tgl" id="b" class="form-control" placeholder="Sesuai yang tercantum di kartu ujian" required <?=$ket[2]?>> 
		 				</div> 		 			
		 		</div> 
		 		
		</div> 		
	</div> 			
	 					
		 						
		 			<div class="row"> 
		 				<div class="offset-sm-1 col-sm-4"> 
		 					<button type="submit" name="cek" class="btn btn-primary" <?=$ket[2]?>>Cek</button> 
		 					<button type="reset" class="btn btn-secondary">Reset</button> 
		 				</div>
		 			</div> 
		 		</form>	
		 	

</div> <!-- End Container / Buka ada di Kop-->