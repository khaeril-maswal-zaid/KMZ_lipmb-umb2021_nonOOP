<!-- Modal lihat admin yg login-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel"><?=$admin["email"] ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span> 
    </button>
   </div>
    
  		<div class="modal-body">
  		
  		 <div class="card mb-3" style="max-width: 540px;">
  		  <div class="row no-gutters"> 
  		  		<div class="col-md-4">
  		  		 <img src="../plugins/inputan-user/foto-admin/<?=$admin["foto"]; ?>" class="card-img pt-4 pl-2" alt="">
  		  	 </div> 
  		  		
  		  		<div class="col-md-8">
  		  		 <div class="card-body"> 
  		  		 		<h5 class="card-title m-0 p-0"><?=$admin["nama"] ?></h5> 
  		  		 		<p class="m-0 p-0"><?=$admin["devisi"] ?></p>
  		  		 		
  		  		 		<p class="my-3">
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">NIK</div>
  		  		 			<div class="col-sm-8">: <?=$admin["nik"] ?> </div> 
  		  		 		</div> 
  		  		 		
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">No HP </div>
  		  		 			<div class="col-sm-8">:  <?=$admin["wa"] ?></div> 
  		  		 		</div> 
  		  		 		
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">Gender</div>
  		  		 			<div class="col-sm-8">:  <?=$admin["jk"] ?></div> 
  		  		 		</div> 
  		  		 		
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">Admin</div>
  		  		 			<div class="col-sm-8">:  <?=$admin["a"] ?></div> 
  		  		 		</div> 
  		  		 		</p> 
  		  		 	  		  		 	
  		  		<div class="row"> 		
  		  			<div class="col-sm-8">
  		  		 		<h6><b>Total Set Peserta</b></h6>
  		  		 	</div> 
  		  		 	<div class="col-sm">
  		  		 	 <h6><b>: <?="&nbsp;",$jadmsa ?></b></h6>
  		  		 	</div>  		  		 	
  		  		</div>  	
  		  		 	
  		  		<div class="row">		
  		  			<div class="col-sm-8">
  		  		 		<h6><b>Total Edit Peserta</b></h6>
  		  		 	</div> 
  		  		 	<div class="col-sm">
  		  		 	 <h6><b>: <?="&nbsp;",$jadmet ?></b></h6>
  		  		 	</div> 
  		  		</div> 	
  		  		 
  		  	 <div class="row">
  		  		 <div class="col-sm-8">
  		  		 		<h6><b>Total Set Pengumuman</b></h6>
  		  		 	</div> 
  		  		 	<div class="col-sm">
  		  		 	 <h6><b>: <?="&nbsp;",$jadmsp ?></b></h6>
  		  		 	</div>
  		  		</div> 	
  		  		 		
  		  		 		<p> 	
	  		  		 		<small class="text-muted float-right">Last updated 3 mins ago</small>
  		  		 		</p> 
  		  		 	</div>
  		  	 </div> 
  		  </div>
  		 </div>
  		 
  		</div>

  	</div> 
 </div> 
</div>



<!-- Modal lihat admin databes-->
<div class="modal fade" id="staticBackdropb" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel"><?=$adminv["email"] ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span> 
    </button>
   </div>
    
  		<div class="modal-body">
  		
  		 <div class="card mb-3" style="max-width: 540px;">
  		  <div class="row no-gutters"> 
  		  		<div class="col-md-4">
  		  		 <img src="../plugins/inputan-user/foto-admin/<?=$adminv["foto"]; ?>" class="card-img pt-4 pl-2" alt="">
  		  	 </div> 
  		  		
  		  		<div class="col-md-8">
  		  		 <div class="card-body"> 
  		  		 		<h5 class="card-title m-0 p-0"><?=$adminv["nama"] ?></h5> 
  		  		 		<p class="m-0 p-0"><?=$adminv["devisi"] ?></p>
  		  		 		
  		  		 		<p class="my-3">
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">NIK</div>
  		  		 			<div class="col-sm-8">: <?=$adminv["nik"] ?> </div> 
  		  		 		</div> 
  		  		 		
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">No HP </div>
  		  		 			<div class="col-sm-8">:  <?=$adminv["wa"] ?></div> 
  		  		 		</div> 
  		  		 		
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">Gender</div>
  		  		 			<div class="col-sm-8">:  <?=$adminv["jk"] ?></div> 
  		  		 		</div> 
  		  		 		
  		  		 		<div class="row">
  		  		 			<div class="col-sm-4">Admin</div>
  		  		 			<div class="col-sm-8">:  <?=$adminv["a"] ?></div> 
  		  		 		</div> 
  		  		 		</p> 
  		  		 		
  		  		 		
  		  		<div class="row"> 		
  		  			<div class="col-sm-8">
  		  		 		<h6><b>Total Set Peserta</b></h6>
  		  		 	</div> 
  		  		 	<div class="col-sm">
  		  		 	 <h6><b>: <?="&nbsp;",$jadmsav ?></b></h6>
  		  		 	</div>  		  		 	
  		  		</div>  	
  		  		 	
  		  		<div class="row">		
  		  			<div class="col-sm-8">
  		  		 		<h6><b>Total Edit Peserta</b></h6>
  		  		 	</div> 
  		  		 	<div class="col-sm">
  		  		 	 <h6><b>: <?="&nbsp;",$jadmetv ?></b></h6>
  		  		 	</div> 
  		  		</div> 	
  		  		 
  		  	 <div class="row">
  		  		 <div class="col-sm-8">
  		  		 		<h6><b>Total Set Pengumuman</b></h6>
  		  		 	</div> 
  		  		 	<div class="col-sm">
  		  		 	 <h6><b>: <?="&nbsp;",$jadmspv ?></b></h6>
  		  		 	</div>
  		  		</div> 	
  		  		 		
  		  		 		<p> 	
	  		  		 		<small class="text-muted float-right">Last updated 3 mins ago</small>
  		  		 		</p> 
  		  		 	</div>
  		  	 </div> 
  		  </div>
  		 </div>
  		 
  		</div>

  	</div> 
 </div> 
</div>