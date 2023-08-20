<main role="main" class="container-fluid pt-3 mb-0">
	<section class="jumbotron text-center pt-5 pb-3 mb-3">
    	<div class="container">
      		<h1><b>Hasil Pengumuman</b></h1>
     		<h3>Program Study</h3> 
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
					$gl='&all=prody';
					if(!isset($_GET['gel'])){
						$av ='active';
					}
				}
          
				echo '<a href="?pengumuman=home'.$gl.'" class=" my-2 ml-1 btn btn-outline-'.$bg.$av.'">'.$kt.'</a>';
			} ?>
      		</p> 
   		</div>
  	</section>
  
  
	<div class="row ml-1 bg-white mr-1 rounded pb-5" id="trg-exp-pdf">
	<?php 
		$prodi = ['PRODI BHS. INDONESIA', 'PRODI BHS. INGGRIS', 'PRODI BIOLOGI', 'PRODI PNF', 'PRODI AKTUARIA', 'PRODI PETERNAKAN', 'PRODI KIMIA', 'PRODI PWK', 'PESERTA TIDAK LULUS', 'JUMLAH MAHASISWA',];

		$icons = [
			'<svg width="4rem" viewBox="0 0 16 16" class="bi bi-bounding-box icon-svg-pengu" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 2V0H0v5h2v6H0v5h5v-2h6v2h5v-5h-2V5h2V0h-5v2H5zm6 1H5v2H3v6h2v2h6v-2h2V5h-2V3zm1-2v3h3V1h-3zm3 11h-3v3h3v-3zM4 15v-3H1v3h3zM1 4h3V1H1v3z"/></svg>',
			
			'<svg width="4rem" viewBox="0 0 16 16" class="bi bi-book-half icon-svg-pengu" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/></svg>',
			
			'<svg width="4rem" viewBox="0 0 16 16" class="bi bi-building icon-svg-pengu" fill="white" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>	<path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/></svg>',

			'<svg width="4rem" viewBox="0 0 16 16" class="bi bi-x-square icon-svg-dtb" fill="white" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/> <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg>',

			'<svg width="4rem" viewBox="0 0 16 16" class="bi bi-check2-circle icon-svg-dtb" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/><path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/> </svg>'
		];

		for($hs=0; $hs<10; $hs++) : 
			if($hs%2 == 0) {
				$offset = 'offset-md-1';
			}if($hs%2 == 1) {
				$offset = '';
			}
	?>
		<div class="col-md-5 <?=$offset ?>">
			<div class="card <?php if ($hs<4){echo 'bg-info';}elseif($hs<7){echo 'bg-primary';}elseif($hs==7){echo 'bg-secondary';}elseif($hs==8){echo 'bg-danger';}elseif($hs==9){echo 'bg-success';}?> mt-3" style="width: 18rem;"> 

				<div class="card-body"> 
					<h6 class="card-title text-white">CALON MAHASISWA BARU<br> <?=$prodi[$hs] ?></h6>
					<div class="total display-4 text-white d-inline">
						<?php 
							if($hs == 9){ echo $rows1[0]+$rows1[1]+$rows1[2]+$rows1[3]+$rows1[4]+$rows1[5]+$rows1[6]+$rows1[7];
							}
							else{echo $rows1[$hs];} 
						?>
					</div>
					<h4 class="total text-white d-inline"> Orang</h4>  
					<?php 
						if ($hs<4){echo $icons[1];}
						elseif($hs<7){echo $icons[0];}
						elseif($hs==7){echo $icons[2];}
						elseif($hs==8){echo $icons[4];}
						elseif($hs==9){echo $icons[3];}?>
					<a href="?pengumuman=file" class="text-white d-block"><p class="d-inline">Lihat Detail</p><p class="d-inline total"> >></p></a>
				</div> 
			</div>
		</div>
	<?php endfor; ?>

	</div>		

	<button class="btn btn-outline-danger mt-4 mb-3" id="tbl-exp-pdf"><b>Export PDF</b></button>
</main>
