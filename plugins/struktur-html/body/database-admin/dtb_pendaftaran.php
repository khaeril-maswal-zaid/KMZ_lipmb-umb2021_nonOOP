<main role="main" class="container-fluid pt-3 mb-0">

<section class="jumbotron text-center pt-5 pb-3 mb-3">
    <div class="container">
      <h1>Database Pendaftaran</h1>
      <p class="lead text-muted">Calon Mahasiswa baru oleh Lembaga Informasi Penerimaan Mahasiswa Baru (LIPMB) Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
      <p>        
        <a href="?dtb=pendaftaran&gel=1" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='1') {echo "active";} ?> btn-outline-success my-2">Gel. 1</a>
        <a href="?dtb=pendaftaran&gel=2" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='2') {echo "active";} ?> btn-outline-success my-2">Gel. 2</a>
        <a href="?dtb=pendaftaran&gel=3" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='3') {echo "active";} ?> btn-outline-success my-2">Gel. 3</a>
        <a href="?dtb=pendaftaran" class="btn <?php if (!isset($_GET['gel'])) {echo "active";} ?> btn-outline-primary my-2">Semua Gel.</a>
      </p>
      
      <div class="row px-3"> 
		 		
		 			<div class="offset-sm-1 col-sm-5">       
        <a href="?dtb=profil" class="btn btn-block btn-secondary my-2">Model Album</a>                
		 			</div>		 					 			
		 			<div class="col-sm-5">
						<span class="btn btn-block btn-primary active my-2">Model Database</span>
		 			</div> 
				</div> 		 			
		 	</div> <!-- /Row -->
      
    </div>
  </section>

<section>
<table id="example" class="table table-striped table-bordered display nowrap" style="width:100%">
		<thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Aksi</th>
                                                                              <th>Tgl Daftar</th>          
                                            <th>Nama Lengkap</th>
                                            <th>NO Peserta</th>
                                  <th>Tanggal Lahir</th>           
                                            <th>Pilihan Kuliah</th>                                                                                       
                                            <th>Pil. Prodi 1</th>
                                            <th>Pil. Prodi 2</th>
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
                                    		<td>
                                    			<a href="?kartu=peserta&id=<?=$dtcmb["id"]; ?>" class="btn btn-success btn-sm">View</a>                                          
                                    			<a href="../plugins/configurasi/proses-admin.php?delete=data&ptr=<?=$dtcmb["id"]; ?>" class="btn btn-danger btn-sm <?php if($admin['a'] == "Pemantau"){echo 'disabled';}?>" onclick="return confirm('Yakin ingin menghapus?')" >Hapus</a>
                                    		</td>
                                    <td><?=$dtcmb["tgl_fix"]; ?></td>
                                            
                                            <td><?=strtoupper($dtcmb["nama_lengkap"]); ?></td>
                                   									<td><?=$dtcmb["no_peserta"]; ?></td>
                                   									<td><?=$dtcmb["tanggal_lahir"]; ?></td>
                                   									<td><?=$dtcmb["pilihan_kuliah"]; ?></td>
                                   									<td><?=$dtcmb["pilihan_1"]; ?></td>                                                                                      
                                            <td><?=$dtcmb["pilihan_2"]; ?></td>
                                            <td></td>                                                                                   
                                    	</tr>
																													
	<?php 
		$No++;
		endforeach; 
	?>
                                                                       </tbody>
</table>
</section>

<a href="../plugins/struktur-html/export/excel/exp_pendaftaran.php<?php if(isset($_GET['gel'])){echo "?gel=".$_GET['gel'];};?>" class="btn btn-success btn-lg shadow mb-3 mt-4" ><b>Export Excel</b></a>

</main>