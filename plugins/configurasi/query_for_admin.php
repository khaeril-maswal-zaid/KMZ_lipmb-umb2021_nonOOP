<?php
//set zona waktu
date_default_timezone_set('Asia/Makassar');

//aktifkan secsion
session_start();
if(isset($_SESSION["idmn"])) {			
			
	// connect to function
	require '../plugins/configurasi/function.php';
		  
	// query data admin
	//.......................
	//DATA ADMIN YANG LOGIN
	$id = $_SESSION["idmn"]; 			 		
 	$admin = dcmb("SELECT * FROM akun_admin WHERE id=$id")[0];
 
	//untuk ditampilkan di database Switc Akun
	$admins = dcmb("SELECT * FROM akun_admin WHERE email != 'muhammadkhaerilzaid@gmail.com'");
 
	if(isset($_GET["idv"])) {
		$idv = $_GET["idv"]; 	
		$adminv = dcmb("SELECT * FROM akun_admin WHERE id='$idv'")[0];	
			
		// hitung kinerja admin
		//.......................
		$kadmv = 	$adminv["nama"]; //dri url
		
		$admsav = mysqli_query($conn, "SELECT file_5 FROM datacamaba WHERE file_5='$kadmv'"); 
		$jadmsav = mysqli_num_rows($admsav);	
		
		$admetv = mysqli_query($conn, "SELECT file_6 FROM datacamaba WHERE file_6='$kadmv'"); 
		$jadmetv = mysqli_num_rows($admetv);	
		
		$admspv = mysqli_query($conn, "SELECT file_7 FROM datacamaba WHERE file_7='$kadmv'"); 
		$jadmspv = mysqli_num_rows($admspv);	 
	}		
	
	
	
	// hitung kinerja admin
 	//.......................
	$kadm = $admin["nama"]; //dri adm loging
	
	$admsa = mysqli_query($conn, "SELECT file_5 FROM datacamaba WHERE file_5='$kadm'"); 
	$jadmsa = mysqli_num_rows($admsa);	

	$admet = mysqli_query($conn, "SELECT file_6 FROM datacamaba WHERE file_6='$kadm'"); 
	$jadmet = mysqli_num_rows($admet);	

	$admsp = mysqli_query($conn, "SELECT file_7 FROM datacamaba WHERE file_7='$kadm'"); 
	$jadmsp = mysqli_num_rows($admsp);	
 
 
	// query data registrasi
	//.......................
	$datacamaba = dcmb("SELECT * FROM datacamaba WHERE no_peserta = '' ORDER BY no_peserta ASC");
  
	//query for hitung jumlah keseluruhan peserta registrasi (HOME DATABASE / CARD)
	$all = mysqli_query($conn, "SELECT * FROM datacamaba");
	$total_peserta = mysqli_num_rows($all);
	
	//query for hitung jumlah peserta belum di-set 
	$alls = mysqli_query($conn, "SELECT * FROM datacamaba WHERE user_name = '' ");
	$total_pesertas = mysqli_num_rows($alls);
	
	// query data pendaftaranS ALL
	//.....................
	$datacamaba_pendaftaran = mysqli_query($conn, "SELECT * FROM datacamaba WHERE no_peserta != '' ORDER BY no_peserta ASC");
	
	//untk filter gelombang All
	if(isset($_GET['gel'])){
		$gel = $_GET['gel']; 

		$datacamaba_pendaftaran = mysqli_query($conn, "SELECT * FROM datacamaba WHERE pilihan_kuliah != '' && gelombang = $gel ORDER BY no_peserta ASC");
	}	
 
	//query for hitung jumlah keseluruhan peserta terdaftar (HOME DATABASE / CARD) 
	$total_pendaftaran = mysqli_num_rows($datacamaba_pendaftaran);
 
	// Konfigurasi ALBUM PESERTA
	// Pagination...............
	$JumlahDataPerhalaman = 6;
	$JummlahHalaman = ceil($total_pendaftaran / $JumlahDataPerhalaman);
	$HalamanAktif = ( isset($_GET["Halaman"]) ) ? $_GET["Halaman"] : 1;
	$AwalData = ( $JumlahDataPerhalaman * $HalamanAktif ) - $JumlahDataPerhalaman;

	$albumPeserta = mysqli_query($conn, "SELECT * FROM datacamaba WHERE pilihan_kuliah != ''  ORDER BY id ASC LIMIT $AwalData, $JumlahDataPerhalaman");

	//untk filter gelombang
	if(isset($_GET['gel'])){
		$gel = $_GET['gel'];
		
		$albumPeserta = mysqli_query($conn, "SELECT * FROM datacamaba WHERE pilihan_kuliah != '' && gelombang = $gel ORDER BY id ASC LIMIT $AwalData, $JumlahDataPerhalaman");
	}	
  
  
 
	//Set akun, Kartu peserta, edit data, CV Peserta dll
	// ............................
	if(isset($_GET["id"])){
	//ambil data dari URL (id) 		
		$id = $_GET["id"]; 		 		
		$dtcmb = dcmb("SELECT * FROM datacamaba WHERE id=$id")[0];
	}
 
 
	// query for saklar value web conf
	//dcmb adalah function query bukan data camaba......................
	$value = dcmb("SELECT * FROM konfigurasi_web_b")[0]; 
	$valuer = dcmb("SELECT * FROM konfigurasi_web_a")[0]; 
	$valuesk = dcmb("SELECT * FROM konfigurasi_web_c")[0];
	$valuea = dcmb("SELECT * FROM konfigurasi_web_d")[0];
	$valueu = dcmb("SELECT * FROM konfigurasi_web_e")[0];
	$valuespp = dcmb("SELECT * FROM konfigurasi_web_f")[0];
	$valuebp = dcmb("SELECT * FROM konfigurasi_web_g")[0];
 
 
	// Hitung jumlah hari pendaftaran
	//..............................   
	$dwg1 = strtotime($value['awal_gel_1']);
	$dts = strtotime(date('d-m-Y'));
	$jh = ($dts-$dwg1)/(60*60*24);


	//Hitung jumlah kelulusan perprodi
	//..............................
	if(isset($_GET['all'])){
		$y = 0;
	while ($y < 9) {
	$pil_1 = ["FAK. FKIP : Pend. Bahasa Inggris",
	"FAK. FKIP : Pend. Bahasa Indonesia",
	"FAK. FKIP : Pend. Biologi",
	"FAK. FKIP : Pend. Non Formal", 
	"FAK. MIPA : Aktuaria",
	"FAK. MIPA : Peternakan",
	"FAK. Tekhnik : Perencanaan Wilayah dan Kota",
	"FAK. MIPA : Kimia", "Tidak lulus :!"];
			
	$x = $pil_1[$y];
			
			$date1 = mysqli_query($conn, "SELECT pilihan_1 FROM datacamaba WHERE file_3 = '$x'");
					
			$rows1[] = mysqli_num_rows($date1);		
		
		$y++;
		}
	}

	if(isset($_GET['gel'])){
		$gel = $_GET['gel'];
		
		$y = 0;
	while ($y < 9) {
	$pil_1 = ["FAK. FKIP : Pend. Bahasa Inggris",
	"FAK. FKIP : Pend. Bahasa Indonesia",
	"FAK. FKIP : Pend. Biologi",
	"FAK. FKIP : Pend. Non Formal", 
	"FAK. MIPA : Aktuaria",
	"FAK. MIPA : Peternakan",
	"FAK. Tekhnik : Perencanaan Wilayah dan Kota",
	"FAK. MIPA : Kimia",
	"Tidak lulus :!"];
			
	$x = $pil_1[$y];
			
			$date1 = mysqli_query($conn, "SELECT pilihan_1 FROM datacamaba WHERE file_3 = '$x' && gelombang = $gel");
					
			$rows1[] = mysqli_num_rows($date1);		
		
		$y++;
		}
	}


	//Hitung admin berdasarkan tugas
	//..............................
		$a = 0;
	while ($a < 3) {
			$admt = ["Pemantau", "Pengelola Data", "Pengembang"];
			
	$at = $admt[$a];
			
			$admtq = mysqli_query($conn, "SELECT a FROM akun_admin WHERE a='$at'");
					
			$admts[] = mysqli_num_rows($admtq);		
		
		$a++;
	}

}// end if session 
 
 
 
 
 
 
 
 
 