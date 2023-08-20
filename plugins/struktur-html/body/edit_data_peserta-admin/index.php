<main class="container-fluid pt-4 mb-4">
	<h2 class="text-center">Edit data Calon Mahasiswa Baru</h2>
	<h5 class="text-center">Universitas Muhammadiyah Bulukumba</h5>

	<form action="../plugins/configurasi/proses-admin.php" id="form" method="post">	
		<!-- Sistem Sembunyi -->
		<input type="hidden" name="id" value="<?=$dtcmb["id"]; ?>">
		<input type="hidden" name="noPeserta" value="<?=$dtcmb["no_peserta"]; ?>">
		<input type="hidden" name="potolama" value="<?=$dtcmb["file_1"]; ?>">	
		<!-- End Sistem Sembunyi -->
		
		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 	<div class="alert alert-primary"> <strong>Data Diri</strong> </div> 
			 
			<div class="row px-3"> 
				<div class="col-sm-7"> 
					<div class="form-group"> 
						<label for="a">Nama Lengkap:</label> 
						<input type="text" name="nama" id="a" maxlength="50" class="form-control" autocomplete="off" required value="<?=  $dtcmb['nama_lengkap']?>"> 
					</div> 
				</div>
				<div class="col-sm-5">
					<div class="form-group"> <label for="b">Nomor Identitas (NIK):</label> 
						<input type="text" name="ktp" id="b" maxlength="16" class="form-control" autocomplete="off" required value="<?=  $dtcmb['no_ktp']?>">
					</div> 
				</div> 		 			
		 	</div> 
			 
			<div class="row px-3"> 
				<div class="col-sm-4">
					<div class="form-group"> 
						<label for="c">Tempat Lahir:</label> 
						<input type="text" name="tempat" id="c" maxlength="30" class="form-control" autocomplete="off" required value="<?=  $dtcmb['tempat_lahir']?>"> 
					</div> 
				</div> 
		 		<div class="col-sm-3"> 
		 			<div class="form-group"> 
		 				<label for="d">Tanggal Lahir:</label>
		 					<?php
								$tgl = explode('-', $dtcmb["tanggal_lahir"]);
								$tanggal = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];		 				 
							?>
		 				<input type="date" name="tanggal" id="d" class="form-control" required value="<?=$tanggal; ?>"> 
		 			</div> 
		 		</div> 
		 		<div class="col-sm-5"> 
					<div class="form-group"> 
						<label for="e">Alamat Email:</label> 
						<input type="email" name="alamatemail" id="e" class="form-control" required autocomplete="off" maxlength="50" value="<?=  $dtcmb['alamat_email']?>"> 
					</div> 
				</div> 
			</div> 
			 
		 	<div class="row px-3"> 
				<div class="col-sm-4"> 
					<div class="form-group"> 
						<label for="f">No Telp:</label> 
						<input type="text" name="telpon" id="f" class="form-control" maxlength="16" autocomplete="off" required value="<?=  $dtcmb['no_hp']?>"> 
					</div> 
				</div> 
		 		<div class="col-sm-3"> 
					<div class="form-group"> 
						<label for="g">Agama:</label> 
						<select name="agama" id="g" class="form-control"> 
							<?php
								$agamas = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Lainnya'];

								for($ag=0; $ag<6; $ag++) :
							?>
							
							<option <?php if($dtcmb['agama'] == $agamas[$ag]){echo 'selected="selected"'; }?>><?=$agamas[$ag]?></option>

							<?php endfor;?>
						</select> 
					</div> 
				</div> 
				<div class="col-sm-5"> 
		 			<div class="form-group"> 
		 				<label>Jenis Kelamin:</label> 
		 				<select class="form-control" name="jk"> 
							<?php
								$jsk = ['Laki-Laki', 'Perempuan'];

								for($jk=0; $jk<2; $jk++) :
							?>
							
							<option <?php if($dtcmb['jenis_kelamin'] == $jsk[$jk]){echo 'selected="selected"'; }?>><?=$jsk[$jk]?></option>

							<?php endfor;?>
		 				</select>
		 			</div> 
		 		</div> 
			</div> 
		
			<div class="row px-3"> 
				<div class="col-sm-4"> 
					<div class="form-group">		
					<label>Provinsi:</label> 
		 				<input type="" name="provinsi" id="prov" class="form-control" required value="<?=$dtcmb['provinsi']; ?>">
		 			</div> 
		 		</div> 
		 		<div class="col-sm-4"> 
		 			<div class="form-group"> 
		 				<label>Kabupaten:</label> 
		 				<input type="" name="kota" id="kab" class="form-control" required value="<?=$dtcmb['kabupaten']; ?>">
		 			</div> 
		 		</div>
		 		
		 		<div class="col-sm-4">
					<div class="form-group"> <label>Alamat:</label> 
						<input type="text" name="alamat" class="form-control" maxlength="30" required autocomplete="off" value="<?=  $dtcmb['alamat']?>">
				 	</div> 
				</div> 			
			</div>
		</div>
		
		<div class="bg-white mb-3 p-2 border border-warning rounded-top"> 
			<div class="alert alert-primary"> <strong>Data Orang Tua</strong></div> 
			
			<div class="row px-3"> 	 
				<div class="col-sm-5 offset-sm-1">
					<div class="form-group"> <label for="l">Nama Ayah:</label> 
						<input type="" name="namaayah" id="l" maxlength="50" class="form-control" value="<?=  $dtcmb['nama_ayah']?>" autocomplete="off" required>
					</div> 
				</div>
				<div class="col-sm-5">
					<div class="form-group"> <label for="m">Nama Ibu:</label> 
						<input type="text" name="namaibu" id="m" class="form-control" value="<?=  $dtcmb['nama_ibu']?>" autocomplete="off" required maxlength="50">
		 			</div> 
				</div>
			</div>

			<div class="row px-3"> 	 
				<div class="col-sm-3">
					<div class="form-group"> <label for="ll">Pekerjaan Ayah:</label> 
						<input type="" name="pkayah" id="ll" maxlength="50" class="form-control" value="<?=  $dtcmb['pekerjaan_ayah']?>" autocomplete="off" required>
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="form-group"> <label for="mm">Pekerjaan Ibu:</label> 
						<input type="text" name="pkibu" id="mm" class="form-control" value="<?=  $dtcmb['pekerjaan_ibu']?>" autocomplete="off" required maxlength="50">
		 			</div> 
				</div>
				<div class="col-sm-3">
					<div class="form-group"> <label for="ly">NO HP Ayah:</label> 
						<input type="" name="noayah" id="ly" maxlength="50" class="form-control" value="<?=  $dtcmb['hp_ayah']?>" autocomplete="off" required>
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="form-group"> <label for="my">NO HP Ibu:</label> 
						<input type="text" name="noibu" id="my" class="form-control" value="<?=  $dtcmb['hp_ibu']?>" autocomplete="off" required maxlength="50">
		 			</div> 
				</div>
			</div>
		
			<div class="row px-3">
				<div class="col-sm-3">
					<div class="form-group ">
						<label for="n">Gaji Ayah</label>
						<select name="gaji_ayah" id="n" class="form-control">
							<?php
								$gajiortu = ['Kurang dari Rp.500.001 per bulan', 'Rp.500.001 - Rp.1.000.000 per bulan', 'Rp.1.000.001 - Rp.2.000.000 per bulan', 'Rp.2.000.001 - Rp.3.000.000 per bulan', 'Rp.3.000.001 - Rp.4.000.000 per bulan', 'Rp.4.000.001 - Rp.5.000.000 per bulan', 'Rp.5.000.001 - Rp.6.000.000 per bulan', 'Rp.6.000.001 - Rp.7.000.000 per bulan', 'Rp.7.000.001 - Rp.8.000.000 per bulan', 'Rp.8.000.001 - Rp.9.000.000 per bulan', 'Rp.9.000.001 - Rp.10.000.000 per bulan','Lebih dari Rp. 10.000.000 per bulan'];

								for($go=0; $go<12; $go++) :
							?>
							<option <?php if($dtcmb['gaji_ayah'] == $gajiortu[$go]){echo 'selected="selected"'; }?>> <?=$gajiortu[$go]?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group ">
						<label for="nx">Gaji Ibu</label>
						<select name="gaji_ibu" id="n" class="form-control">
							<?php
								$gajiortu = ['Kurang dari Rp.500.001 per bulan', 'Rp.500.001 - Rp.1.000.000 per bulan', 'Rp.1.000.001 - Rp.2.000.000 per bulan', 'Rp.2.000.001 - Rp.3.000.000 per bulan', 'Rp.3.000.001 - Rp.4.000.000 per bulan', 'Rp.4.000.001 - Rp.5.000.000 per bulan', 'Rp.5.000.001 - Rp.6.000.000 per bulan', 'Rp.6.000.001 - Rp.7.000.000 per bulan', 'Rp.7.000.001 - Rp.8.000.000 per bulan', 'Rp.8.000.001 - Rp.9.000.000 per bulan', 'Rp.9.000.001 - Rp.10.000.000 per bulan','Lebih dari Rp. 10.000.000 per bulan'];

								for($go=0; $go<12; $go++) :
							?>
							<option <?php if($dtcmb['gaji_ibu'] == $gajiortu[$go]){echo 'selected="selected"'; }?>> <?=$gajiortu[$go]?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group ">
						<label for="n">Jumlah saudara</label>
						<select name="saudara" id="n" class="form-control">
							<?php for($x=1; $x<11; $x++) : ?>
								<option <?php if($dtcmb['saudara'] == $x){echo 'selected="selected"'; }?>><?=$x;?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group ">
						<label for="n">Anak ke :</label>
						<select name="ke" id="n" class="form-control">
							<?php for($xn=1; $xn<11; $xn++) : ?>
								<option <?php if($dtcmb['anak_ke'] == 'Ke '.$xn){echo 'selected="selected"'; }?>>Ke <?=$xn;?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>			
			</div>
		</div>
		 

		<div class="bg-white mb-4 p-2 border border-warning rounded-top">
		 	<div class="alert alert-primary"> <strong>Data Pendidikan</strong></div> 
			 
			<div class="row px-3"> 
		 		<div class="col-sm-4 offset-sm-1">
		 			<div class="form-group"> 
		 				<label for="o">No NISN:</label> 
		 				<input type="" name="nisn" id="o" maxlength="10" class="form-control" autocomplete="off" required value="<?=  $dtcmb['nisn']?>"> 
		 			</div>
		 		</div> 
				<div class="col-sm-6"> 
					<div class="form-group"> 
						<label for="p">Nama Sekolah:</label> 
						<input type="" name="namasekolah" id="p" maxlength="50" class="form-control" required autocomplete="off" value="<?=  $dtcmb['nama_sekolah']?>"> 
					</div> 
				</div>
			</div>
		 						
		 	<div class="row px-3">
				<div class="col-sm-4 offset-sm-2"> 
					<div class="form-group"> 
						<label for="q">Jurusan:</label> 
						<input type="" name="jurusan" id="q" maxlength="20" class="form-control" required autocomplete="off" value="<?=  $dtcmb['jurusan']?>"> 
					</div> 
				</div>
				<div class="col-sm-4">
					<div class="form-group ">
						<label for="q">Tahun lulus</label>											
						<select name="t_lulus" id="q" class="form-control">
							<?php for ($i=2011; $i < 2022; $i++) {echo "<option>$i</option>";} ?>
						</select>
					</div>
				</div> 
			</div>
		</div> 	 					
		 					
		
		<div class="row"> 
	 		<div class="col-sm-4">		
				<div class="bg-white mb-3 p-2 border border-warning rounded-top"> 
					<div class="alert alert-primary"> <strong>Unggah Foto</strong></div> 
		 
		 			<div class="form-group px-2">
						<input type="file" name="file1a" id="file1" class="form-control p-1">		
					</div> 				
						
					<div id="uploaded_image1" height="82" width="157" class="text-center">
						<b>Photo Peserta</b>
						<br>
						<img src="../plugins/inputan-user/foto-peserta/<?=  $dtcmb['file_1']?>" height="80" width="155" class="img-thumbnail">
					</div>						
				</div>
			</div>
					  
		 	<div class="col-sm-8">			 
	 	 		<div class="bg-white mb-2 p-3 border border-warning rounded-top">
					<div class="alert alert-primary"> <strong> Pilihan </strong></div> 
			 	
			 		<div class="col-sm-12">		
			 			<div class="form-group">
							<label>Pilihan Kuliah</label>
							<select name="pilihan_kuliah" id="f" class="form-control">
							<option value="">Pilih</option>
							
								<?php
									$pilkul = ['Kuliah Reguler', 'Kuliah Non Reguler'];

									for($pk=0; $pk<2; $pk++) :
								?>

								<option <?php if($dtcmb['pilihan_kuliah'] == $pilkul[$pk]){ echo 'selected="selected"'; }?>> <?=$pilkul[$pk] ?></option>
								
								<?php endfor; ?>
							</select>
						</div>
					</div>
					
					<div class="col-sm-12">		
			 			<div class="form-group">
							<label>Pilihan Prodi 1</label>
							<select name="prodi1" id="f" class="form-control">
							    <option value="">Pilih</option>
								<?php
									$pilpro = ['FAK. MIPA : Aktuaria', 'FAK. MIPA : Peternakan', 'FAK. MIPA : Kimia', 'FAK. FKIP : Pend. Non Formal', 'FAK. FKIP : Pend. Bahasa Inggris', 'FAK. FKIP : Pend. Bahasa Indonesia', 'FAK. FKIP : Pend. Biologi', 'FAK. Tekhnik : Perencanaan Wilayah dan Kota'];

									for($pp=0; $pp<8; $pp++) :
								?>
								
								<option <?php if($dtcmb['pilihan_1'] == $pilpro[$pp]){ echo'selected="selected"'; }?>> <?=$pilpro[$pp]; ?></option>

								<?php endfor ?>
							</select>
						</div>
					</div>
	
					<div class="col-sm-12">		
			 			<div class="form-group">
							<label>Pilihan Prodi 2</label>
							<select name="prodi2" id="f" class="form-control">
							    <option value="">Pilih</option>
								<?php
									$pilpro = ['FAK. MIPA : Aktuaria', 'FAK. MIPA : Peternakan', 'FAK. MIPA : Kimia', 'FAK. FKIP : Pend. Non Formal', 'FAK. FKIP : Pend. Bahasa Inggris', 'FAK. FKIP : Pend. Bahasa Indonesia', 'FAK. FKIP : Pend. Biologi', 'FAK. Tekhnik : Perencanaan Wilayah dan Kota'];

									for($pp=0; $pp<8; $pp++) :
								?>
							    
								<option <?php if($dtcmb['pilihan_2'] == $pilpro[$pp]){ echo'selected="selected"'; }?>> <?=$pilpro[$pp]; ?></option>

								<?php endfor ?>
							</select>
						</div>
					</div>											
		 		</div>
			</div>
		</div>
		 	
		<div class="row"> 
		 	<div class="col-sm-8">			 					 
		 		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 			<div class="alert alert-primary"> <strong>Alasan Memilih Kampus UM Bulukumba</strong> </div>
		 		 		 	
		 			<div class="row px-3">
			 			<div class="col-sm-12">	
							<div class="form-group">												
								<textarea name="alasan" rows="8" required style="width : 100%;"><?=  $dtcmb['alasan']?></textarea>
							</div>
						</div>
					</div>		 								 	
				</div>
			</div>	
				
			<div class="col-sm-4">						 
		 		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 			<div class="alert alert-primary py-0"> <strong>Raport peserta tidak dapat diubah</strong> </div>
		 		 		 	
		 			<div class="row px-3">
			 			<div class="col-sm-12">	
							<div class="form-group">												
								<input type="file" disabled name="file8" id="a" class="form-control p-1 mb-2">	
							
								<div class="text-center">
									<img src="../plugins/assets/image/df2.jpg" class="img-thumbnail small" style="height : 158px;">
								</div>
							</div>
						</div>
					</div>		 								 	
				</div>	
			</div>	
		</div>
		 						
		<div class="row"> 
			<div class="offset-sm-1 col-sm-4"> 
				<button type="submit" name="edit" class="btn btn-primary">Edit</button> 
				<button type="reset" class="btn btn-secondary">Reset</button> 
			</div>
		</div> 
	</form>		 		 
</main> <!-- End Container -->
		 
 
 
 
		 			
		 			
		 			
		 			
		 			
		 			
		 			