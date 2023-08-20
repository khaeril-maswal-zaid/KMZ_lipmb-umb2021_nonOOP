<main role="main" class="container-fluid pt-3 mb-5">
	<div class="jumbotron"> 
		<h1 class="display-4">Selamat datang..!</h1>
		<h2><?=$admin["nama"] ?></h2>

		<hr class="mb-4 mt-1">

		<p class="lead">
			Di portal Sistem Informasi Manajman Lembaga Informasi Penerimaan Mahasiswa Baru Universitas Muahammadiyah Bulukumba <br>
			(SIM - LIPMB UMB).
		</p>
		<p>Sistem Informasi Manajman sebuah aplikasi berbasis web yang telah dirancang untuk mempermudah segala urusan manajman penerimaan mahasiswa baru. <br>
			dengan fitur full control databases sangat membantu untuk mengola data calon mahasiswa baru.
		</p> 
				
		<hr class="my-4"> 
				
		<h4>Admin SIM - LIPMB terdiri dari :</h4>
		<h5 class="mb-0">
			<ul class="mb-0 pl-4">
				<li <?php if($admin['a']=='Pemantau') echo 'class="text-primary"' ?>>Pemantau</li>
				<li <?php if($admin['a']=='Pengelola data') echo 'class="text-primary"' ?>>Pengelola Data</li>
				<li <?php if($admin['a']=='Pengembang') echo 'class="text-primary"' ?>>Pengembang</li>
			</ul>
		</h5>
	</div>
</main>