<div class="container-fluid pt-4">
	<h2 class="text-center">Form Pendaftaran Calon Mahasiswa Baru</h2>
	<h5 class="text-center">Universitas Muhammadiyah Bulukumba <?=date('Y')?></h5>
		 
	<form action="" id="form" method="post">
		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
			<div class="alert alert-primary"> 
				<strong>Data Diri</strong> 	
			</div> 
			<div class="row px-3"> 
				<div class="col-sm-7"> 
					<div class="form-group"> 
						<label for="a">Nama Lengkap:</label> 
						<input type="text" name="nama" id="a" maxlength="50" class="form-control" placeholder="Sesuai dengan Ijazah terakhir" autocomplete="off" autofocus required> 
					</div> 
				</div>
				<div class="col-sm-5">
					<div class="form-group"> <label for="b">Nomor Identitas (NIK):</label> 
						<input type="text" name="ktp" id="b" maxlength="16" class="form-control" placeholder="Harus disi dengan angka" autocomplete="off" required>
					</div> 
				</div> 		 			
			</div> 
				
			<div class="row px-3"> 
				<div class="col-sm-4">
					<div class="form-group"> 
						<label for="c">Tempat Lahir:</label> 
						<input type="text" name="tempat" id="c" maxlength="30" class="form-control" placeholder="Masukan Tempat Lahir" autocomplete="off" required> 
					</div> 
				</div> 
				<div class="col-sm-3"> 
					<div class="form-group"> 
						<label for="d">Tanggal Lahir:</label>
						<input type="date" name="tanggal" id="d" class="form-control" required> 
					</div> 
				</div> 
				<div class="col-sm-5"> 
					<div class="form-group"> 
						<label for="e">Alamat Email:</label> 
						<input type="email" name="alamatemail" id="e" class="form-control" placeholder="Pastikan alamat email aktif" required autocomplete="off" maxlength="50"> 
					</div> 
				</div> 
			</div> 
				
			<div class="row px-3"> 
				<div class="col-sm-4"> 
					<div class="form-group"> 
						<label for="f">No Telp. (WA) :</label> 
						<input type="text" name="telpon" id="f" class="form-control" placeholder="Pastikan dalam keadaan aktif" maxlength="16" autocomplete="off" required> 
					</div> 
				</div> 
				<div class="col-sm-3"> 
					<div class="form-group"> 
						<label for="g">Agama:</label> 
						<select name="agama" id="g" class="form-control"> 
							<?php
								$agamas = ['Pilih', 'Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Lainnya'];
								for($ag=0; $ag<7; $ag++) :
							?>
							<option><?=$agamas[$ag]?></option>
							<?php endfor;?>
						</select> 
					</div> 
				</div> 
				<div class="col-sm-5"> 
					<div class="form-group"> 
						<label>Jenis Kelamin:</label> 
						<select class="form-control" name="jk"> 
							<option>Pilih</option> 
							<option value="Laki-Laki">Laki-laki</option> <option value="Perempuan">Perempuan</option> 
						</select>
					</div> 
				</div> 
			</div> 
	
			<div class="row px-3"> 
				<div class="col-sm-4"> 
					<div class="form-group">	
						<label>Provinsi:</label> 
						<select class="form-control" name="provinsi" id="provinsi"> 
							<option></option>
							<!-- Provinsi akan diload menggunakan ajax, dan ditampilkan disini -->
							<?php
								//query
								$sql_provinsi = mysqli_query($conn, "SELECT * FROM provinces ORDER BY name ASC");
							
								// Tampilkan data
								while($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)){
									echo '<option value="'.$rs_provinsi['id'].'">'.$rs_provinsi['name'].'</option>'; 			
								} 					 
							?>
						</select>
					</div> 
				</div> 
					
				<div class="col-sm-4"> 
					<div class="form-group"> 
						<label>Kabupaten:</label> 
						<img src="../plugins/assets/image/loading.gif" width="35" id="load1" style="display:none;"/>
							<select class="form-control" name="kota" id="kota">
								<option></option>
								<!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini --> 
							</select>
					</div> 
				</div>
				
				<div class="col-sm-4">
					<div class="form-group"> <label>Alamat:</label> 
						<input type="text" name="alamat" class="form-control" placeholder="Ch: Desa Bulo-Bulo Kec. Bulukumpa" maxlength="30" required autocomplete="off">
					</div> 
				</div> 			
			</div>
		</div>
		
		 
		<div class="bg-white mb-3 p-2 border border-warning rounded-top"> 
			<div class="alert alert-primary"> <strong>Data Orang Tua</strong></div> 
			
			<div class="row px-3"> 	 
				<div class="col-sm-5 offset-sm-1">
					<div class="form-group"> <label for="l">Nama Ayah:</label> 
						<input type="" name="namaayah" id="l" maxlength="50" class="form-control" placeholder="Sesuai di Ijazah anda" autocomplete="off" required>
					</div> 
				</div>
				<div class="col-sm-5">
					<div class="form-group"> <label for="m">Nama Ibu:</label> 
						<input type="text" name="namaibu" id="m" class="form-control" placeholder="Masukan Nama Ibu" autocomplete="off" required maxlength="50">
		 			</div> 
				</div>
			</div>

			<div class="row px-3"> 	 
				<div class="col-sm-3">
					<div class="form-group"> <label for="ll">Pekerjaan Ayah:</label> 
						<input type="" name="pkayah" id="ll" maxlength="50" class="form-control" placeholder="Pekerjaan Ayah" autocomplete="off" required>
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="form-group"> <label for="mm">Pekerjaan Ibu:</label> 
						<input type="text" name="pkibu" id="mm" class="form-control" placeholder="Pekerjaan Ibu" autocomplete="off" required maxlength="50">
		 			</div> 
				</div>
				<div class="col-sm-3">
					<div class="form-group"> <label for="ly">NO HP Ayah:</label> 
						<input type="" name="noayah" id="ly" maxlength="50" class="form-control" placeholder="No HP Ayah" autocomplete="off" required>
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="form-group"> <label for="my">NO HP Ibu:</label> 
						<input type="text" name="noibu" id="my" class="form-control" placeholder="No HP Ibu" autocomplete="off" required maxlength="50">
		 			</div> 
				</div>
			</div>
		
			<div class="row px-3">
				<div class="col-sm-3">
					<div class="form-group ">
						<label for="n">Gaji Ayah</label>
						<select name="gajiayah" id="n" class="form-control">
							<option value="0" selected="selected">Silahkan dipilih</option>
							<?php
								$gajiortu = ['Kurang dari Rp.500.001 per bulan', 'Rp.500.001 - Rp.1.000.000 per bulan', 'Rp.1.000.001 - Rp.2.000.000 per bulan', 'Rp.2.000.001 - Rp.3.000.000 per bulan', 'Rp.3.000.001 - Rp.4.000.000 per bulan', 'Rp.4.000.001 - Rp.5.000.000 per bulan', 'Rp.5.000.001 - Rp.6.000.000 per bulan', 'Rp.6.000.001 - Rp.7.000.000 per bulan', 'Rp.7.000.001 - Rp.8.000.000 per bulan', 'Rp.8.000.001 - Rp.9.000.000 per bulan', 'Rp.9.000.001 - Rp.10.000.000 per bulan','Lebih dari Rp. 10.000.000 per bulan'];

								for($go=0; $go<12; $go++) :
							?>
							<option> <?=$gajiortu[$go]?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group ">
						<label for="nx">Gaji Ibu</label>
						<select name="gajiibu" id="nx" class="form-control">
							<option selected="selected">Silahkan dipilih</option>
							<?php
								$gajiortu = ['Kurang dari Rp.500.001 per bulan', 'Rp.500.001 - Rp.1.000.000 per bulan', 'Rp.1.000.001 - Rp.2.000.000 per bulan', 'Rp.2.000.001 - Rp.3.000.000 per bulan', 'Rp.3.000.001 - Rp.4.000.000 per bulan', 'Rp.4.000.001 - Rp.5.000.000 per bulan', 'Rp.5.000.001 - Rp.6.000.000 per bulan', 'Rp.6.000.001 - Rp.7.000.000 per bulan', 'Rp.7.000.001 - Rp.8.000.000 per bulan', 'Rp.8.000.001 - Rp.9.000.000 per bulan', 'Rp.9.000.001 - Rp.10.000.000 per bulan','Lebih dari Rp. 10.000.000 per bulan'];

								for($go=0; $go<12; $go++) :
							?>
							<option> <?=$gajiortu[$go]?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group ">
						<label for="n">Jumlah bersaudara</label>
						<select name="saudara" id="n" class="form-control">
							<option selected="selected">Silahkan dipilih</option>
							<?php for($x=1; $x<16; $x++) : ?>
								<option><?=$x;?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group ">
						<label for="n">Anak ke :</label>
						<select name="ke" id="n" class="form-control">
							<option value="0" selected="selected">Silahkan dipilih</option>
							<option>Pertama</option>
							<?php for($x=2; $x<16; $x++) : ?>
								<option>Ke <?=$x;?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>			
			</div>
		</div>
		 	 
		 	 
	 	 <div class="bg-white mb-4 p-2 border border-warning rounded-top">
	 		<div class="alert alert-primary"><strong>Data Pendidikan</strong> </div> 
	 		
	 		<div class="row px-3"> 
	 			<div class="col-sm-4 offset-sm-1">
	 				<div class="form-group"> 
	 					<label for="o">No NISN:</label> 
	 					<input type="" name="nisn" id="o" maxlength="10" class="form-control" placeholder="Harus disi dengan angka" autocomplete="off" required> 
	 				</div>
	 			</div> 
	 					
	 			<div class="col-sm-6"> 
	 				<div class="form-group"> 
	 					<label for="p">Nama Sekolah:</label> 
	 					<input type="" name="namasekolah" id="p" maxlength="50" class="form-control" placeholder="Masukan Nama Sekolah" required autocomplete="off"> 
	 				</div> 
	 			</div>
	 		</div>
		 						
 			 <div class="row px-3">
 				<div class="col-sm-4 offset-sm-2"> 
 					<div class="form-group"> 
 						<label for="q">Jurusan:</label> 
 						<input type="" name="jurusan" id="q" maxlength="20" class="form-control" placeholder="Cth: XII IPA 1, XII IPS 2, dll" required autocomplete="off"> 
 					</div> 
 				</div>
 				<div class="col-sm-4">
 					<div class="form-group ">
						<label for="q">Tahun lulus</label>											
						<select name="t_lulus" id="q" class="form-control">

							<?php for ($i=2011; $i < 2022; $i++) { 
						    	echo "<option>$i</option>";	
					    	}?>
									
						</select>
					</div>
		    	</div> 
 			</div>
 		</div> 	 	
 			

 		<div class="bg-white mb-2 p-3 border border-warning rounded-top">
			<div class="alert alert-primary"> <strong> Pilihan </strong> </div> 
		 	<div class="row px-3">
		        <div class="col-sm-4">		
			 		<div class="form-group">
						<label>Pilihan Kuliah</label>
						<select name="pilihan_kuliah" id="f" class="form-control" required>
							<option value="" selected="selected">Silahkan dipilih</option>
							<option>Kuliah Reguler</option>
							<option>Kuliah Non Reguler</option>											
						</select>
					</div>
				</div>
				
				<div class="col-sm-4">		
		 		    <div class="form-group">
					    <label>Pilihan Prodi 1</label>
						<select name="prodi1" id="f" class="form-control" required>
							<option value="" selected="selected">Silahkan dipilih</option>
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
				
				<div class="col-sm-4">		
			 		    <div class="form-group">
						    <label>Pilihan Prodi 2</label>
							<select name="prodi2" id="f" class="form-control" required>
							    <option value="" selected="selected">Silahkan dipilih</option>
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
		 	
		 <div class="row"> 
 			<div class="offset-sm-1 col-sm-4"> 
 				<button type="submit" name="regis" class="btn btn-primary">Daftar</button> 
 				<button type="reset" class="btn btn-secondary">Reset</button> 
 			</div>
 		</div> 
 	</form>		 		 
 </div> <!-- End Container -->
		 