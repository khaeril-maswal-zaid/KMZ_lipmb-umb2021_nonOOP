<body class="<?php if(isset($bg)){echo $bg;}else{echo "asal-!-kosong";} ?>">
	<header>
		<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-primary p-0">
			<!-- KOP -->
		 	<div class="kopfitur shadow rounded text-center">
				<a class="navbar-brand mr-auto mr-lg-0 font-weight-bolder" href="../">LIPMB UMB</a>
			</div>
			<!-- End KOP -->
	 	 
	 	 	<!-- Link --> 		 	  
		 	<div class="collapse navbar-collapse" id="navbarNavDropdown"><!-- Formalitas --></div>
			<!-- End Link -->	 

		 	<!-- Logout -->
		 	<div class="mr-3">
				<a href="?index=home" class="btn btn-danger btn-sm">Keluar</a>
			</div>

			<?php                     
				if(isset($_GET["index"])&&$_GET["index"]=="home"){       
					header("location: ../");
					exit;
				}
			?>
			<!-- End Logout -->
	 	</nav>
	</header>
	
	<main> <!--Tutup di FooterAll-->