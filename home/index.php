<?php
//aktifkan session
session_start();

if ($_GET ) :                           
		if($_GET["pendaftaran"] == "registrasi"){       
     header("location: ../registrasi");
     exit;
     
    }elseif($_GET["pendaftaran"] == "login"){       
      header("location: ../login-peserta");
      exit; 
      
    }elseif($_GET["informasi"] == "pendaftaran"){       
      header("location: ../informasi-pendaftaran");
      exit; 
      
    }elseif($_GET["pengumuman"] == "peserta"){       
      header("location: ../pengumuman");
      exit; 
          
    }elseif($_GET["biaya"] == "pendidikan"){       
      header("location: ../biaya-pendidikan");
      exit; 
    }

    elseif(isset($_GET["prodi"])){       
      header("location: ../program-study");
      exit; 
    }
endif;   
      

//HTML   
include '../plugins/struktur-html/head/headAll.php';
include '../plugins/struktur-html/head/navbar-home.php';

include "../plugins/configurasi/hapus_session.php";
include '../plugins/struktur-html/body/home/home.php';

include '../plugins/struktur-html/foot/footerAll.php';
include '../plugins/struktur-html/foot/scriptFoot.php';
