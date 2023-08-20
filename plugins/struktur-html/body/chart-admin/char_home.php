<script src="../plugins/assets/chart/highcharts.js"></script>
<script src="../plugins/assets/chart/data.js"></script>
<script src="../plugins/assets/chart/drilldown.js"></script>
<script src="../plugins/assets/chart/highcharts-3d.js"></script>
<script src="../plugins/assets/chart/highcharts-more.js"></script>
<script src="../plugins/assets/chart/export-data.js"></script>
<script src="../plugins/assets/chart/accessibility.js"></script>


<section class="container-fluid">

<div class="row">
	<div class="card bg-info ml-3 mt-3" style="width: 18rem;"> 
	 <div class="card-body"> 
			<h5 class="card-title text-white">PESERTA TEREGISTRASI</h5>
			<div class="total display-4 text-white d-inline"><?php
      	//query for hitung jumlah keseluruhan peserta registrasi      
    			echo $total_peserta;
    			?></div>
			<h4 class="total text-white d-inline"> Orang</h4>  
			<svg width="4rem" viewBox="0 0 16 16" class="bi bi-person-bounding-box icon-svg-dtb" fill="white" xmlns="http://www.w3.org/2000/svg"> 
			<path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/> 
			<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> 
			</svg>
			<a href="?dtb=registrasi" class="text-white d-block"><p class="d-inline">Lihat Detail</p><p class="d-inline total"> >></p></a>
		</div> 
	</div>

	<div class="card bg-success ml-3 mt-3" style="width: 18rem;"> 
	 <div class="card-body"> 
			<h5 class="card-title text-white">PESERTA TERDAFTAR</h5>
			<div class="total display-4 text-white d-inline"><?php
      	//query for hitung jumlah keseluruhan peserta registrasi      
    			echo $total_pendaftaran;
   			 ?></div>
			<h4 class="total text-white d-inline"> Orang</h4>  
			<svg width="4rem" viewBox="0 0 16 16" class="bi bi-person-check icon-svg-dtb" fill="white" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> </svg>
			<a href="?dtb=pendaftaran" class="text-white d-block"><p class="d-inline">Lihat Detail</p><p class="d-inline total"> >></p></a>
		</div> 
	</div>
	
	<div class="card bg-danger ml-3 mt-3" style="width: 100width: 18rem;%;"> 
	 <div class="card-body"> 
			<h5 class="card-title text-white"> HARI KE : </h5>
			<div class="total h1 text-white d-inline">+ <?=$jh?></div>	
			<hr color="white" class="my-3 px-0 text-white"> 
			<small class="d-inline text-white d-block">Sejak : <?=$value['awal_gel_1']?></small>
		</div> 
	</div>
</div>


  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-warning rounded shadow-sm">
    <img class="mr-3" src="../plugins/assets/image/umb.png" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Lembaga Informasi Penerimaan Mahasiswa Baru</h6>
      <small class="mb-0 text-white">Uversitas Muhammadiyah Bululumba</small>
    </div>
  </div>


<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik pendaftaran calon mahasiswa baru 10 hari terakhir</b></h6>    
   <?php
   		include "chart_idx.php";   		
   	?>
  </div>

<div class="row">
	<div class="col-md-6">
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik camaba berdasarkan pilihan kuliah </b></h6>   
   <?php
   		include "kuliah.php";
   	?>  
  </div>
	</div>
	
	<div class="col-md-6">
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik camaba berdasarkan jenis kelamin </b></h6>   
   <?php
   		include "jk.php";
   	?>  
  </div>
 </div>
</div>
  
  
<div class="row">
	<div class="col-md-6">  
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik jumlah peserta berdasarkan pilihan prodi 1</b></h6>   
   <?php
   		include "prodi1.php";
   	?>  
  </div>
</div> 
 
 <div class="col-md-6">   
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik jumlah peserta berdasarkan pilihan prodi 2 </b></h6>   
   <?php
   		include "prodi2.php";
   	?>  
  </div>
</div>
</div>

<div class="row">
	<div class="col-md-6">  
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik camaba berdasarkan tahun lahir </b></h6>   
   <?php
   		include "thn_kelahiran.php";
   	?>  
  </div>
 </div> 
 
 <div class="col-md-6">  
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik camaba berdasarkan Kabupaten asal </b></h6>   
   <?php
   		include "chart_kab.php";
   	?>  
  </div>
</div>
</div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><b>Grafik camaba berdasarkan tahun tamat SLTA </b></h6>   
   <?php
   		include "thn_tamat.php";
   	?>  
  </div>

  </section>

