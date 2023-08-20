<?php
$judul = "Admin | ";

//session_start();


//panggil queryS rupiah sistem
require '../plugins/configurasi/query_for_admin.php';
require '../plugins/configurasi/rupiah.php';

//HTML   
include '../plugins/struktur-html/head/headAll.php';

//aktifkan secsion
//session_start(); dimatikan diversi 7.3.2 karena sudah ada di query for admin
if(!isset($_SESSION["idmn"])) {
	include '../plugins/struktur-html/head/navbar-fitur.php';

	include '../plugins/struktur-html/body/data-admin/login.php';
	
}elseif(isset($_SESSION["idmn"])) { 
    
	include '../plugins/struktur-html/head/navbar-admin.php';

	if($_GET) {
		//Nav Second
		//................
		if(isset($_GET["id"])||isset($_GET["dtb"])){			       
			include "../plugins/struktur-html/head/navscd-databases-admin.php";
		}
		elseif(isset($_GET["pengumuman"]) && $admin['a'] != "Prodi"){
			//navscd pengumuman
			include "../plugins/struktur-html/head/navscd-pengumuman-admin.php";
		}
		elseif(isset($_GET["admin"]) && $admin['a']=="Pengembang"){
			//panggil varibel value
			include '../plugins/configurasi/saklar_value-web_conf.php';
			//navscd admin interface
			include "../plugins/struktur-html/head/navscd-admin-admin.php";		
		}			
		elseif(isset($_GET["user"]) && $admin['a']=="Pengembang"){
			//panggil varibel value
			include '../plugins/configurasi/saklar_value-web_conf.php';
			//navscd user interface
			include "../plugins/struktur-html/head/navscd-user-admin.php";		
		}
		elseif(isset($_GET["adminf"])){
			//navscd  switch akun
			include "../plugins/struktur-html/head/navscd-adminf-admin.php";		
		}


		//DatabasesS
		//.................
		if(isset($_GET["dtb"])){
			if($_GET["dtb"]=="home"){
				//Chart
				include "../plugins/struktur-html/body/chart-admin/char_home.php";      		 
			}elseif($_GET["dtb"] == "registrasi"){
				//dtb registrsi
				include "../plugins/struktur-html/body/database-admin/dtb_registrasi.php";
			}elseif($_GET["dtb"] == "pendaftaran"){       
				//dtb pendaftaran
				include "../plugins/struktur-html/body/database-admin/dtb_pendaftaran.php";
			}elseif($_GET["dtb"] == "profil"){       
				//dtb detail data
				include "../plugins/struktur-html/body/profil_peserta-admin/index.php";
			}elseif($_GET["dtb"] == "detail_data"){       
				include "../plugins/struktur-html/body/database-admin/dtb_detail_data.php";
			}
		}elseif(isset($_GET["set"]) && $_GET["set"] == "akun"){    
			//SET AKUN PESERTA 
			//Auto Set PASWORD dan USERNAME
			if($dtcmb["paswoard"] != '' && $dtcmb["user_name"] != ''){
				$usrSet = $dtcmb["user_name"];
				$pswSet = $dtcmb["paswoard"];
			}else{
				$TentukanAngka = mt_rand(0,4);
			 
				$TentukanUsername = [$dtcmb["no_ktp"], $dtcmb["alamat_email"], $dtcmb["nama_lengkap"], $dtcmb["no_hp"], $dtcmb["nisn"]];
				 
				$usrSet = $TentukanUsername[$TentukanAngka];
				$pswSet = uniqid().'kmz';
			}

			include "../plugins/struktur-html/body/set_akun-admin/index.php";
		}elseif(isset($_GET["kartu"])&&$_GET["kartu"] == "peserta"){
			//tanggal INA
			include "../plugins/configurasi/tanggal_Indonesia.php";
			//Kartu peserta
			include "../plugins/struktur-html/body/pendaftaran/kartu-peserta.php";
		}elseif(isset($_GET["cv"])&&$_GET["cv"] == "peserta"){
			//cv-pesera
			include "../plugins/struktur-html/body/cv-peserta-admin/cv-peserta.php";
		}elseif(isset($_GET["edit"]) && $_GET["edit"] == "data"  ){ 
			//edit data peserta
			include "../plugins/struktur-html/body/edit_data_peserta-admin/index.php";
		}
		   
		//Pengumuan
		//.................
		elseif(isset($_GET["pengumuman"]) && $admin['a'] != "Prodi") {
   			if($_GET["pengumuman"] == "home"){
				//hm pengumuman
   		 		include "../plugins/struktur-html/body/pengumuman/hm-pengumuman.php";
  			}elseif($_GET["pengumuman"] == "set"){
				//set pengumuman
				include "../plugins/struktur-html/body/pengumuman/set_pengumuman.php";
  			}elseif($_GET["pengumuman"] == "file"){       
				//file pengumuman
				include "../plugins/struktur-html/body/pengumuman/file_pengumuman.php";
  			}
		}
		   
	
		//Set Interface 
		//................
		//dan admin yg login harus admin Pengembang
		elseif(isset($_GET["admin"]) && $admin['a']=="Pengembang"){
 			if($_GET["admin"] == "interface"){       
   				 include "../plugins/struktur-html/body/set-conf-web-admin/home-ai.php";
  			}elseif($_GET["admin"] == "tahapan"){       
   				include "../plugins/struktur-html/body/set-conf-web-admin/set-tahapan.php";
  			}elseif($_GET["admin"] == "ruangan"){       
   				include "../plugins/struktur-html/body/set-conf-web-admin/set-ruangan.php";
  			}elseif($_GET["admin"] == "lamp"){       
   		 		include "../plugins/struktur-html/body/set-conf-web-admin/set-file_pengumuman.php";
  			}elseif($_GET["admin"] == "admin"){       
   		 		include "../plugins/struktur-html/body/set-conf-web-admin/set-adm_penerimaan.php";
  			}
		}
		//dan admin yg login harus admin Pengembang
		elseif(isset($_GET["user"]) && $admin['a']=="Pengembang"){
			if($_GET["user"] == "interface"){       
   		 		include "../plugins/struktur-html/body/set-conf-web-admin/home-ui.php";   		 			   
  			}elseif($_GET["user"] == "jp"){       
   		 		include "../plugins/struktur-html/body/set-conf-web-admin/set-jp.php";   		 			   
  			}elseif($_GET["user"] == "bp"){       
				include "../plugins/struktur-html/body/set-conf-web-admin/b-kuliah.php";   		 			   
		 	}elseif($_GET["user"] == "spp"){       
   		 		include "../plugins/struktur-html/body/set-conf-web-admin/set-spp.php";   		 			   
			}
		}
  				
  				  		    
		//Databases & Tambah admin
		//.........................
		elseif(isset($_GET["adminf"]) && $admin['a']=="Pengembang"){
  			if($_GET["adminf"] == "home"){       
   		 		include "../plugins/struktur-html/body/data-admin/switch-akun-hm.php";
  			}elseif($_GET["adminf"] == "akun"){       
   		 		include "../plugins/struktur-html/body/data-admin/database.php";
  			}elseif($_GET["adminf"] == "tambah"){       
   		 		include "../plugins/struktur-html/body/data-admin/tambah-admin.php";
  			}
		}		
		  
		
		//ketika tidak ada fariabel GET 
		else {
			$khususHomeAdm = 'active';
			include "../plugins/struktur-html/head/navscd-home-admin.php";
			include "../plugins/struktur-html/body/home-admin/index.php";
		}
	}
	//ketika tidak ada fariabel GET 
	else {
		include "../plugins/struktur-html/head/navscd-home-admin.php";
		include "../plugins/struktur-html/body/home-admin/index.php";
	}

	//Modal box lihat admin
	include '../plugins/struktur-html/body/data-admin/view-admin.php';
} //endif sessions

include '../plugins/struktur-html/foot/footerAll.php';
include '../plugins/struktur-html/foot/scriptFoot.php';

