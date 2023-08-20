<main role="main" class="container-fluid pt-3 mb-0">

<section class="jumbotron text-center pt-5 pb-3 mb-3">
    <div class="container">
      <h1>Set Pengumuman</h1>
      <p class="lead text-muted">Calon Mahasiswa baru oleh Lembaga Informasi Penerimaan Mahasiswa Baru (LIPMB) Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
      <p>        
        <a href="?pengumuman=set&gel=1" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='1') {echo "active";} ?> btn-outline-success my-2">Gel. 1</a>
        <a href="?pengumuman=set&gel=2" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='2') {echo "active";} ?> btn-outline-success my-2">Gel. 2</a>
        <a href="?pengumuman=set&gel=3" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='3') {echo "active";} ?> btn-outline-success my-2">Gel. 3</a>
        <a href="?pengumuman=set" class="btn <?php if (!isset($_GET['gel'])) {echo "active";} ?> btn-outline-primary my-2">Semua Gel.</a>
      </p> 
    </div>
  </section>

<form action="../plugins/configurasi/proses-admin.php" id="form" method="post">
<table id="example" class="table table-striped table-bordered display nowrap" style="width:100%">
		<thead>
                                        <tr>
                                            <th>NO</th>                                            
                                            <th>Nama Lengkap</th>
                                            <th>NO Peserta</th>
                                  <th>Tanggal Lahir</th>           
                                            <th>Pilihan Kuliah</th>
                                 <th>Set Prodi lulus</th>                                                                                                                                            
                                            <th>Ket</th>                                                                                   
                                        </tr>
                                    </thead>
                                    <tbody>

<?php 
	$No=1;
	foreach( $datacamaba_pendaftaran as $dtcmb ) : 
?>
                                    	<tr>
                                    		<td><?=$No; ?></td>                                                                      
                                            		<td><?=$dtcmb["nama_lengkap"]; ?></td>
                                   		<td><?=$dtcmb["no_peserta"]; ?></td>
                                   		<td><?=$dtcmb["tanggal_lahir"]; ?></td>
                                   		<td><?=$dtcmb["pilihan_kuliah"]; ?></td>
                                   		<td>
   	<div class="form-group" style="width:320px">						
				<select name="prodi_lulus<?=$No; ?>" class="form-control">
					<?php
					if($dtcmb["file_3"]&&$dtcmb["file_3"]!="Pilih"){
						echo'<option selected="selected">'.$dtcmb["file_3"].'</option>';
									}
					?>
								
							<option>Pilih</option>
							<option>Tidak lulus :!</option>
					
							<option><?=$dtcmb["pilihan_1"]; ?></option>
								<option><?=$dtcmb["pilihan_2"]; ?></option>											
							</select>
							<input type="hidden" name="id<?=$No; ?>" value="<?=$dtcmb["id"]; ?>">	
										</div>
								</td>                                                                                      
                                                                                     <td><?=$dtcmb["file_7"]; ?></td>                                                                                   
                                    	</tr>
																													
	<?php 
		$No++;
		endforeach;
	?>
                                                                       </tbody>
</table>
					<div class="row"> 
		 				<div class="offset-sm-1 col-sm-4 mb-3 mt-4"> 
		 					<button type="submit" name="set-pengumuman" class="btn btn-success" onclick="return confirm('Yakin ingin men-set?')" <?php if($admin['a'] == "Pemantau"){echo 'style="display:none"';}?>>Set Prodi</button> 
		 					<button type="reset" class="btn btn-secondary">Reset</button> 
		 				</div>
		 			</div> 
</form>
</main>