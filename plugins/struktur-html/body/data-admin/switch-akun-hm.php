<main role="main" class="container-fluid pt-3">
	<section class="jumbotron text-center pt-5 pb-3 mb-3">
    <div class="container">
      <h1>Portal Manajman Admin</h1>
      <p class="lead text-muted"> Sistem Informasi Manajman<br>Lembaga Informasi Penerimaan Mahasiswa Baru (SIM - LIPMB)<br> Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
    </div>
  </section>


<div class="row ml-1 bg-white mr-1 rounded pb-5">
<div class="col-md-5 offset-md-1">
	<div class="card bg-info mt-3" style="width: 18rem;"> 
	 <div class="card-body"> 
			<h5 class="card-title text-white">JUMLAH ADMIN<br> PEMANTAU</h5>
			<div class="total display-4 text-white d-inline">
			<?=$admts[0]?>
   </div>
			<h4 class="total text-white d-inline"> Orang</h4>  
				<svg width="4rem" viewBox="0 0 16 16" class="bi bi-cast icon-svg-pengu" fill="white" xmlns="http://www.w3.org/2000/svg"> <path d="M7.646 9.354l-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z"/> <path d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086l-1-1z"/> </svg>
			<a href="?adminf=akun" class="text-white d-block"><p class="d-inline">Lihat Detail</p><p class="d-inline total"> >></p></a>
		</div> 
	</div>
</div>

<div class="col-md-5">
	<div class="card bg-primary mt-3" style="width: 18rem;"> 
	 <div class="card-body"> 
			<h5 class="card-title text-white">JUMLAH ADMIN<br> PENGELOLA DATA</h5>
			<div class="total display-4 text-white d-inline"><?=$admts[1]?></div>
			<h4 class="total text-white d-inline"> Orang</h4>  
			<svg width="4rem" viewBox="0 0 16 16" class="bi bi-clipboard-data icon-svg-pengu" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
</svg>
			<a href="#" class="text-white d-block"><p class="d-inline">Lihat Detail</p><p class="d-inline total"> >></p></a>
		</div> 
	</div> 
</div> 
	
	<div class="col-md-5 offset-md-1">
	<div class="card bg-success mt-3" style="width: 18rem;"> 
	 <div class="card-body"> 
			<h5 class="card-title text-white">JUMLAH ADMIN<br> PENGEMBANG</h5>
			<div class="total display-4 text-white d-inline"><?=$admts[2]?></div>
			<h4 class="total text-white d-inline"> Orang</h4>  
			<svg width="4rem" viewBox="0 0 16 16" class="bi bi-file-earmark-code icon-svg-pengu" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
  <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
  <path fill-rule="evenodd" d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"/>
</svg>
			<a href="?adminf=akun" class="text-white d-block"><p class="d-inline">Lihat Detail</p><p class="d-inline total"> >></p></a>
		</div> 
	</div>
</div>

<div class="col-md-5">
	<div class="card bg-secondary mt-3" style="width: 18rem;"> 
	 <div class="card-body"> 
			<h5 class="card-title text-white">JUMLAH KESELURUHAN<br> ADMIN</h5>
			<div class="total display-4 text-white d-inline"><?=$admts[0]+$admts[1]+$admts[2]?></div>
			<h4 class="total text-white d-inline"> Orang</h4>  
		<svg width="4rem" viewBox="0 0 16 16" class="bi bi-file-person-fill icon-svg-pengu" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg>
			<a href="#" class="text-white d-block"><p class="d-inline">Lihat Detail</p><p class="d-inline total"> >></p></a>
		</div> 
	</div>
</div> 
</div> 
	
</main>