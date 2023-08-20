<main role="main" class="container-fluid pt-3">
  <section class="jumbotron jumbotron-fluid text-center pt-5 pb-3 mb-3">
    <div class="container">
      <h1>Album Peserta</h1>
      <p class="lead text-muted">Calon Mahasiswa baru oleh Lembaga Informasi Penerimaan Mahasiswa Baru (LIPMB) Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
      <p>  
				<?php for($tb=1; $tb<5; $tb++){
          $av ='notactive';
          
					if ($tb<4){
            $bg='success ';
            $kt='Gel. '.$tb;
            $gl='&gel='.$tb;
            if(isset($_GET['gel'])&&$_GET['gel']==$tb){
              $av ='active';
            }
					}else{
            $bg='primary ';
            $kt='Semua Gel.';
            $gl='';
            if(!isset($_GET['gel'])){
              $av ='active';
            }
          }
          
					echo '<a href="?dtb=profil'.$gl.'" class=" my-2 ml-1 btn btn-outline-'.$bg.$av.'">'.$kt.'</a>';
				} ?>
      </p>
      
      <div class="row px-3"> 
		 		<div class="offset-sm-1 col-sm-5">       
          <span class="btn btn-primary active btn-block my-2">Model Album</span>               
		 		</div>		 					 			
		 		<div class="col-sm-5">
					<a href="?dtb=pendaftaran" class="btn btn-block btn-secondary my-2">Model Database</a>
		 		</div> 			
		  </div> <!-- /Row -->
    </div>
  </section>
  
  <div class="album pt-4">
    <div class="container">
      <div class="row m-4" id="trg-exp-pdf">
        <?php foreach( $albumPeserta as $dtcmb ) : ?>
        <div class="col-md-4 pl-0">
          <div class="card mb-4 shadow-sm">
            <img src="../plugins/inputan-user/foto-peserta/<?=$dtcmb["file_1"]; ?>" height="270">
            <div class="card-body">
              <h5 class="textwarning bg-warning text-center pt-1">
                <b><?=$dtcmb["no_peserta"]; ?></b>
              </h5>
              
              <p class="card-text">
                <?=strtoupper($dtcmb["nama_lengkap"]); ?> <br>
                <?=$dtcmb["tanggal_lahir"]; ?> <br><br>
                <b><?=$dtcmb["pilihan_kuliah"]; ?></b><br>
                - <?=$dtcmb["pilihan_1"]; ?><br>
                - <?=$dtcmb["pilihan_2"]; ?> 
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="?kartu=peserta&id=<?=$dtcmb["id"]; ?>" class="btn btn-sm btn-success mr-1">View</a>
                  <a href="../plugins/configurasi/proses-admin.php?delete=data&alb=<?=$dtcmb["id"]; ?>" class="btn btn-danger btn-sm <?php if($admin['a'] == "Pemantau"){echo 'disabled';}?>" onclick="return confirm('Yakin ingin menghapus?')">hapus</a>
                </div>
                <small class="text-muted" style="font-size: .750rem;"><?=$dtcmb["tgl_fix"]; ?></small>
              </div>
            </div>
          </div>
        </div>
       	<?php endforeach ?>
      </div>      
    
      <!-- Pagination -->
      <!-- Nafigasi -->
			<nav aria-label="...">
        <ul class="pagination">
          <?php if ($HalamanAktif > 1) : ?>
            <li class="page-item">
      			  <a class ="page-link" href="?dtb=profil&Halaman=<?= $HalamanAktif - 1 ?>">Previous</a> 
    		    </li>     		          
          <?php else : ?>
      		
          <li class="page-item disabled">
            <span class= "page-link">Previous</span> 
          </li>  
    	    
          <?php 
            endif;		
            for ( $i = 1; $i <= $JummlahHalaman; $i++) :
            if ($i == $HalamanAktif) : 
     	    ?>

     			<li class="page-item active"><span class="page-link">
            <?=$i ?></span>
     		  </li> 
     		 
          <?php else : ?>
            <li class="page-item"><a class="page-link" href="?dtb=profil&Halaman=<?= $i; ?>"><?=$i ?></a></li> 
          <?php 
            endif;
            endfor; 
          ?> 
     	   
      	  <?php if ($HalamanAktif < $JummlahHalaman) : ?>
            <li class="page-item">
      			  <a class ="page-link" href="?dtb=profil&Halaman=<?= $HalamanAktif + 1 ?>">Next</a> 
    		  	</li>     		          
          <?php else : ?>
      		
          <li class="page-item disabled">
            <span class= "page-link">Next</span> 
          </li>  
    	    
          <?php endif; ?>   
        </ul> 
      </nav>
		  <!-- End Pagination -->
    
    </div>
  </div>

  <button id="tbl-exp-pdf" class="btn btn-outline-danger" ><b>Export PDF</b></button>
</main>