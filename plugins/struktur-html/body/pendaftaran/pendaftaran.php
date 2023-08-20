<div class="container pt-4">
			<h2 class="text-center">Form Pendaftaran Calon Mahasiswa Baru</h2>
			<h5 class="text-center">Universitas Muhammadiyah Bulukumba <?=date('Y')?></h5>
		 
		 <form action="../plugins/configurasi/proses-user.php" id="form" method="post" enctype="multipart/form-data">
		 <div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Data Diri</strong> 	
		 		</div>
		 		 
		 		 <!-- Sistem Sembunyi -->
		 		 <input type="hidden" name="id" value="<?php echo $dtcmb["id"]; ?>"> 		
		 		 
		 		<div class="row px-3"> 
		 			<div class="col-sm-7"> 
		 				<div class="form-group"> 
		 					<label for="a">Nama Lengkap:</label>  					
		 					<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $dtcmb["nama_lengkap"]; ?>" readonly> 
		 				</div> 
		 			</div>
		 				 			
		 			<div class="col-sm-5">
				<div class="form-group"> <label for="b">Nomor Identitas (NIK):</label> 
						<input type="text" name="ktp" id="nik" class="form-control" value="<?php echo $dtcmb["no_ktp"]; ?>" readonly>
			 </div> 
			</div> 		 			
		</div>
	</div>
		 		
		
	 <div class="row"> 
	 <div class="col-sm-4">		
		<div class="bg-white mb-3 p-2 border border-warning rounded-top"> 
		
				<div class="alert alert-primary"> <strong>Unggah Foto</strong>
				</div> 
		 
		 			<div class="form-group px-2">
							<input type="file" name="file1a" id="file1" class="form-control p-1">		
					</div> 				
						
					<div id="uploaded_image1" height="82" width="157" class="text-center">
						<b>Contoh Photo Peserta </b>
						<br>
						<img src="../plugins/assets/image/df1.jpg" height="80" width="155" class="img-thumbnail">
					</div>						
			</div>
			</div>
			
		 			  
		 <div class="col-sm-8">			 
	 	    <div class="bg-white mb-2 p-3 border border-warning rounded-top">
			    <div class="alert alert-primary"> <strong> Pilihan </strong> </div> 
			 	
			        <div class="col-sm-12">		
			 		<div class="form-group">
						<label>Pilihan Kuliah</label>
							<select name="pilihan_kuliah" id="f" class="form-control" required>
								<option value="" selected="selected">
									Silahkan dipilih</option>
									<option>Kuliah Reguler</option>
									<option>Kuliah Non Reguler</option>											
							</select>
						</div>
					</div>
					
					<div class="col-sm-12">		
			 		<div class="form-group">
						<label>Pilihan Prodi 1</label>
							<select name="prodi1" id="f" class="form-control" required>
								<option value="" selected="selected">
											Silahkan dipilih</option>
											<option>FAK. MIPA : Aktuaria</option>
											<option>FAK. MIPA : Peternakan</option>
											<option>FAK. MIPA : Kimia</option>
											<option>FAK. FKIP : Pend. Non Formal</option>
											<option>FAK. FKIP : Pend. Bahasa Inggris</option>
											<option>FAK. FKIP : Pend. Bahasa Indonesia</option>
											<option>FAK. FKIP : Pend. Biologi</option>
											<option>FAK. Tekhnik : Perencanaan Wilayah dan Kota</option>			
							</select>
						</div>
					</div>
					
					<div class="col-sm-12">		
			 		<div class="form-group">
						<label>Pilihan Prodi 2</label>
							<select name="prodi2" id="f" class="form-control" required>
								<option value="" selected="selected">
											Silahkan dipilih</option>
											<option>FAK. MIPA : Aktuaria</option>
											<option>FAK. MIPA : Peternakan</option>
											<option>FAK. MIPA : Kimia</option>
											<option>FAK. FKIP : Pend. Non Formal</option>
											<option>FAK. FKIP : Pend. Bahasa Inggris</option>
											<option>FAK. FKIP : Pend. Bahasa Indonesia</option>
											<option>FAK. FKIP : Pend. Biologi</option>
											<option>FAK. Tekhnik : Perencanaan Wilayah dan Kota</option>			
							</select>
						</div>
					</div>											
		 	</div>
			</div>
			</div>
		 	
		 <div class="row"> 
		 <div class="col-sm-8">			 					 
		 	<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Alasan Memilih Kampus UM Bulukumba</strong> 	
		 		</div>
		 		 		 	
		 		<div class="row px-3">
			 		<div class="col-sm-12">	
							<div class="form-group">												
								<textarea name="alasan" rows="8" required></textarea>
							</div>
						</div>
					</div>		 								 	
				</div>
				</div>	
				
			<div class="col-sm-4">						 
		 	<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 		<div class="alert alert-primary"> 
		 			<strong>Unggah Raport (Pdf) *Tidak Wajib</strong> 	
		 		</div>
		 		 		 	
		 		<div class="row px-3">
			 		<div class="col-sm-12">	
							<div class="form-group">												
							<input type="file" name="file8" id="a" class="form-control p-1 mb-2">	
							
							<div class="text-center">
								<img src="../plugins/assets/image/df2.jpg" class="img-thumbnail small">
							</div>
							</div>
						</div>
					</div>		 								 	
				</div>	
				</div>	
		</div>	
					 					 	 						 						
		 	<div class="row"> 
 				<div class="offset-sm-1 col-sm-4"> 
		 					<button type="submit" name="daftar" class="btn btn-primary">Daftar</button> 
		 					<button type="reset" class="btn btn-secondary">Reset</button> 
		 				</div>
		 			</div> 
		 		</form>		 		 
		 	</div> <!-- End Container -->