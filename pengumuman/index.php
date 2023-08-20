<?php
$judul = "Pengumuman hasil seleksi camaba | ";

//panggil query user
include '../plugins/configurasi/query-for-user.php';

//Buka tutup lihat pengumuman
//berdasrkan tgl yg diset oleh adm
include'../plugins/configurasi/noPesertaDanPenentuanGel.php';

  if(isset($_GET["unduh"])&&$_GET["unduh"] == "sk"){       
    header("location: ../plugins/inputan-user/sk-rektor/".$valuesk['sk']);
    exit;         
  } 

  //Ulangi ke pencarian	
  if(isset($_GET["pengumuman"])&&$_GET["pengumuman"] == "peserta"){        
    include "../plugins/configurasi/hapus_session.php";
  }


//HTML
include '../plugins/struktur-html/head/headAll.php';
include '../plugins/struktur-html/head/navbar-fitur.php';


include '../plugins/struktur-html/body/pengumuman/kop.php';
if(isset($_SESSION["gagal"])){
	include '../plugins/struktur-html/body/pengumuman/gagal-pengumuman.php';
	
}elseif(isset($_SESSION["lulus"])){
	include '../plugins/struktur-html/body/pengumuman/lulus-pengumuman.php';
}else{
	include '../plugins/struktur-html/body/pengumuman/lihat-pengumuman.php';
}

include '../plugins/struktur-html/foot/footerAll.php';
include '../plugins/struktur-html/foot/scriptFoot.php';