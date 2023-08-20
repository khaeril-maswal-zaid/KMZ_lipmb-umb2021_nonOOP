<?php
//petanda proses += user
$proses_pbc = true;

//Aktifkan session
session_start();

// connect to function
require 'function.php';

//tambah data registrasi peserta
//...............................		
if (isset($_SESSION["regis"]) ) :
	if (tambah1($_SESSION["regis"]) > 0) {
			$_SESSION["info"] = true;
			echo "
			<script>
				alert('pendaftaran berhasil');
				document.location = '../../registrasi';
			</script>
			";
			Exit;
		} else {
			echo "
			<script>
				alert('pendaftaran gagal');
				document.location = '../../registrasi'
			</script>
			";
			Exit;
		}		
endif;



//login peserta
//...............................		
if (isset($_POST["loginuser"]) ) :
		$username = $_POST["email"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM datacamaba WHERE user_name = '$username'");

		// cek username
		if (mysqli_num_rows($result) === 1) {
			// cek password
				$row = mysqli_fetch_assoc($result);
				$idkirim = $row["id"];
				$pswasl = $row["paswoard"];

				if($password === $pswasl ) {
						//set session
						$_SESSION["id"] = $idkirim;
						header("location: ../../login-peserta");			
						exit;
					}else {
		   			echo "
								<script>
									alert('Paswoard SALAH')
									document.location = '../../login-peserta'
								</script>
							";
							exit;
					}
		}else { 
				echo "
					<script>
						alert('Username tidak ditemukan')
						document.location = '../../login-peserta'
					</script>
				";
				exit;
		}			
endif;


// Tambah data pendaftrn peserta
//...............................
if (isset($_POST["daftar"]) ) :
		if (tambah2($_POST) > 0) {
			echo "
			<script>
				alert('Pendaftaran berhasil')
				document.location = '../../login-peserta'
			</script>
			";
			exit;
		} else {
			echo "
			<script>
				alert('Pendaftaran gagal')
				document.location = '../../login-peserta'
			</script>
			";
			exit;
		}
endif;
	
	
//Pengumuman
//..............................
if (isset($_POST["cek"]) ) :
		$no_peserta = $_POST["no_peserta"];
	
		$tgl = explode('-', $_POST["tgl"]);
		$tanggal = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];

		$result = mysqli_query($conn, "SELECT * FROM datacamaba WHERE no_peserta = '$no_peserta'");

	// cek no peserta
	if (mysqli_num_rows($result) === 1) {
		// cek tgl lahir
		$row = mysqli_fetch_assoc($result);
	
		$tgl = $row["tanggal_lahir"];

		if($tanggal === $tgl ) {
			//tentukan kelulusan
			if($row['file_3'] === 'Tidak lulus :!'){
				$_SESSION["gagal"] = true;
				$_SESSION["no_peserta"] = $no_peserta;
									
			}elseif($row['file_3'] != 'Pilih' && $row['file_3'] != 'Tidak lulus :!' && $row['file_3'] != ''){			
				$_SESSION["lulus"] = true;
				$_SESSION["no_peserta"] = $no_peserta;
			}			
								
			//kembali ke pengumuman					
			header("location: ../../pengumuman");			
			exit;

		}else {
		echo "
					<script>
						alert('Pastikan tanggal lahir anda sesuai!')
						document.location = '../../pengumuman'
					</script>
			";	
			exit;		
		}
	}else { 
			echo "
				<script>
					alert('NO peserta tidak ditemukan')
					document.location = '../../pengumuman'
				</script>
			";
			exit;
	}
endif;


//jika tidak ada perintah kembali
header("location:../../");







 