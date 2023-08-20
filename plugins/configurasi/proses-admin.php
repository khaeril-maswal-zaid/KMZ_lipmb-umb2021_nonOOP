<?php
//petanda proses == admin 
$proses_adm = true;

// connect to function
require 'function.php';

//DATA ADMIN YANG LOGIN 
//fungsi bagi kinerja admin
if(isset($_SESSION["idmn"])){
$id = $_SESSION["idmn"]; 			 		
$admin = dcmb("SELECT * FROM akun_admin WHERE id=$id")[0];
}

//hapus data peserta
//................................
if(isset($_GET['delete'])&&$_GET['delete']=='data' && $admin['a'] != "Pemantau") :
//hapus di dtb registrasi
if(isset($_GET["id"])) {
	$id = $_GET["id"];
	if ( hapus($id) > 0 ) {
		echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = '../../admin/?dtb=registrasi'						
			</script>
		";
		exit;
	}else{
		echo "
			<script>
				alert('data gagal hapus!');
				document.location.href = '../../admin/?dtb=registrasi'						
			</script>
		";
		exit;
	}
}

//hapus di dtb pendaftaran
if(isset($_GET["ptr"]) && $admin['a'] != "Pemantau") {
	$ptr = $_GET["ptr"];
	if ( hapus($ptr) > 0 ) {
		echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = '../../admin/?dtb=pendaftaran'						
			</script>
		";
		exit;
	}else{
		echo "
			<script>
				alert('data gagal hapus!');
				document.location.href = '../../admin/?dtb=pendaftaran'						
			</script>
		";
		exit;
	}
} 

//hapus di profil peserta
if(isset($_GET["alb"]) && $admin['a'] != "Pemantau") {
	$alb = $_GET["alb"];
	if ( hapus($alb) > 0 ) {
		echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = '../../admin/?dtb=profil'
			</script>
		";
		exit;
	}else {
		echo "
			<script>
				alert('data gagal hapus!');
				document.location.href = '../../admin/?dtb=profil'
		</script>
		";
		exit;
	}
}
	
//hapus admin
if(isset($_GET["admin"])) {
	$adm = $_GET["admin"];
	if ( hapusa($adm) > 0 ) {
		echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = '../../admin/?adminf=akun'
			</script>
		";
		exit;
	}else {
		echo "
			<script>
				alert('data gagal hapus!');
				document.location.href = '../../admin/?admin=akun'
		</script>
		";
		exit;
	}
}
endif;

//set akun peserta
//................................
if (isset($_POST["set-akun"])) :
	if (registrasi($_POST) > 0) {
		echo "
			<script>
				alert('Peserta berhasil diregistrasi');
				document.location.href = '../../admin/?dtb=registrasi'						
			</script>
		";
		Exit;
	}else{
		echo "
			<script>
				alert('Peserta gagal diregistrasi');
				document.location.href = '../../admin/?dtb=registrasi'						
			</script>
		";
		Exit;
	}
endif;

//edit data peserta
//................................
if (isset($_POST["edit"]) ) :
	if (Edit_data_camaba($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diedit')
				document.location.href = '../../admin/?dtb=detail_data'
			</script>
		";
		exit;
	}else{
		echo "
			<script>
				alert('tidak ada data yang diedit')
				document.location.href = '../../admin/?dtb=detail_data'
			</script>
		";
		exit;
	}
endif;

//set prodi pengumuman
//................................
if (isset($_POST["set-pengumuman"]) && $admin['a'] != "Pemantau") :	
	if (pengumuman($_POST) > 0 ) {
		echo "
			<script>
				alert('Prodi kelulusan berhasil diset')
				document.location.href = '../../admin/?pengumuman=set'
			</script>
		";
		exit;
	}else {
		echo "
			<script>
				alert('Prodi kelulusan gagal diset')
				document.location.href = '../../admin/?pengumuman=set'
			</script>
		";
		exit;
	}
endif;
	
//set SPP
//................................
if (isset($_POST["sspp"]) ) :
	if (webkonf_f($_POST) > 0) {
		echo "
			<script>
				alert('set tahapan berhasil');
				document.location.href = '../../admin/?user=spp'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('set tahapan gagal');
				document.location.href = '../../admin/?user=spp'
			</script>
		";
		Exit;
	}
endif;	
	
//set tahapan penerimaan
//................................
if (isset($_POST["tahapan"]) ) :
	if (webkonf_b($_POST) > 0) {
		echo "
			<script>
				alert('set tahapan berhasil');
				document.location.href = '../../admin/?admin=tahapan'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('set tahapan gagal');
				document.location.href = '../../admin/?admin=tahapan'
			</script>
		";
		Exit;
	}
endif;	


//set tahapan ujian
//................................
if (isset($_POST["tahapan-u"]) ) :
	if (webkonf_e($_POST) > 0) {
		echo "
			<script>
				alert('set tahapan berhasil');
				document.location.href = '../../admin/?admin=tahapan'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('set tahapan gagal');
				document.location.href = '../../admin/?admin=tahapan'
			</script>
		";
		Exit;
	}
endif;
	

//set ruangan ujian
//................................
if (isset($_POST["ruangan"]) ) :
	if (webkonf_a($_POST) > 0) {
		echo "
			<script>
				alert('set tahapan berhasil');
				document.location.href = '../../admin/?admin=ruangan'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('set tahapan gagal');
				document.location.href = '../../admin/?admin=ruangan'
			</script>
		";
		Exit;
	}
endif;	


//set file pengumuman
//...............................	
if (isset($_POST["f-pengumuman"]) ) :
	if (webkonf_c($_POST) > 0) {
		echo "
			<script>
				alert('set tahapan berhasil');
				document.location.href = '../../admin/?pengumuman=file'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('set tahapan gagal');
				document.location.href = '../../admin/?admin=lamp'
			</script>
		";
		Exit;
	}
endif;	

//set Biaya pendidikan
//...............................	
if (isset($_POST["sbp"]) ) :
	if (webkonf_g($_POST) > 0) {
		echo "
			<script>
				alert('set tahapan berhasil');
				document.location.href = '../../admin/?user=bp'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('set tahapan gagal');
				document.location.href = '../../admin/?user=bp'
			</script>
		";
		Exit;
	}
endif;	


//set admin penerimaan
//...............................
if (isset($_POST["admin-p"]) ) :
	if (webkonf_d($_POST) > 0) {
		echo "
			<script>
				alert('set tahapan berhasil');
				document.location.href = '../../admin/?admin=admin'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('set tahapan gagal');
				document.location.href = '../../admin/?admin=admin'
			</script>
		";
		Exit;
	}
endif;
	
	
//tambah admin
//...............................
if (isset($_POST["tambah-admin"]) ) :
	if (tambah_admin($_POST) > 0) {
		echo "
			<script>
				alert('Registrasi admin berhasil');
				document.location.href = '../../admin?adminf=akun'
			</script>
		";
		Exit;
	}else {
		echo "
			<script>
				alert('Registrasi admin gagal');
				document.location.href = '../../admin?adminf=akun'
			</script>
		";
		Exit;
	}
endif;


//login admin
//...............................
if (isset($_POST["login-admin"]) ) {
		
	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM akun_admin WHERE email = '$email'");

	// cek username
	if (mysqli_num_rows($result) === 1) {
		
		// cek password
		$row = mysqli_fetch_assoc($result);		
							
		if(password_verify($password, $row['sandi'])){								
			// set session
			session_start();
			$_SESSION["idmn"] = $row['id'];
		header("location: ../../admin/");
			exit;
		}	else {
		 echo "
				<script>
					alert('Paswoard SALAH')
					document.location.href = '../../admin'
				</script>
			";
		Exit;
		}
	}else { 
		echo "
			<script>
				alert('Alamat email anda SALAH !')
				document.location.href = '../../admin'
			</script>
			";	
		Exit;
		}
}


//jika tidak ada perintah kembali
header("location:../../admin");