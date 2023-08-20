<body class="admin">
    <nav class="navbar navbar-expand-xl navbar-dark fixed-top bg-primary p-0">
      <div class="kop text-center align-middle">  	
  			<a class="navbar-brand mr-auto mr-xl-0 font-weight-bolder" href="../admin">SIM - LIPMB UMB</a>
			</div>
		    	      
      <button id="menu-toggle" class="navbar-toggler saklar position-absolute" type="button" data-toggle="offcanvas">
       <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="mr-3">
          <a href="../" class="btn btn-danger btn-sm">Keluar</a>
      </div> 

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
  		  <div data-toggle="modal" data-target="#staticBackdrop">
  		    <img src="../plugins/inputan-user/foto-admin/<?=$admin["foto"]; ?>" width="60" class="rounded-circle d-inline shadow mt-3 bordert">
  		    <h6 class="akun-nama mt-1 mb-0">	<?=$admin["nama"] ?> 	</h6>
          <h6 class="akun-email">	<?=$admin["email"] ?> </h6>
        </div>

  		  <hr class="m-0">
  		
        <ul class="navbar-nav mr-auto">      
          <li class="nav-item <?php if(!$_GET){echo "active";} ?>">
            <a class="nav-link" href="../admin">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if(isset($_GET['dtb'])){echo "active";} ?>">
            <a class="nav-link" href="?dtb=home">Databases</a>
          </li>
          <li class="nav-item <?php if(isset($_GET['pengumuman'])){echo "active";} ?>">
            <a class="nav-link" href="?program=study" style="<?php if($admin['a'] != "Prodi"){echo 'display:none';}?>">Program Studi</a>
          </li>
          <li class="nav-item <?php if(isset($_GET['pengumuman'])){echo "active";} ?>">
            <a class="nav-link" href="?pengumuman=home&all=prody" style="<?php if($admin['a'] == "Prodi"){echo 'display:none';}?>">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Directory</a>
          </li>
          <li class="nav-item <?php if(isset($_GET['adminf'])){echo "active";} ?>" style="<?php if($admin['a'] != "Pengembang"){echo 'display:none';}?>">
            <a class="nav-link" href="?adminf=home">Switch account</a>
          </li>
          <li class="nav-item dropdown <?php if(isset($_GET['admin'])||isset($_GET['user'])){echo "active";} ?>">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" style="<?php if($admin['a'] != "Pengembang"){echo 'display:none';}?>">
              <a class="dropdown-item" href="?admin=interface">Admin interface</a>
              <a class="dropdown-item" href="?user=interface">User interface</a>
              <a class="dropdown-item" href="?kmz=only">Something here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  <!-- Wrapper (tag tutup setelah footer)--> 

<main id="wrapper"> <!--Tutup di FooterAll-->	