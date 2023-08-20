<?php
$judul = "Login & pendaftaran peserta | ";

//panggil query user
include '../plugins/configurasi/query-for-user.php';

//HTML
include '../plugins/struktur-html/head/headAll.php';

//khusus kartu-peserta bg-secondary
if(isset($dtcmb["no_peserta"]) && $dtcmb["alasan"]){
	$bg = 'bg-secondary';
}

include '../plugins/struktur-html/head/navbar-fitur.php';

//JIKA SUDAH LOGIN
if(isset($_SESSION["id"]) && $dtcmb["user_name"]) {
	//jika sudah mandaftar ke kartu peserta
	if(isset($dtcmb["pilihan_1"]) && $dtcmb["alasan"]){	
		include "../plugins/configurasi/tanggal_Indonesia.php"	;
		include '../plugins/struktur-html/body/pendaftaran/kartu-peserta.php';	
		$ft = 'footers';//BACAI!
	}else{
// 		include "../plugins/configurasi/noPesertaDanPenentuanGel.php";//penentuan No Peserta & Gelombang
		include '../plugins/struktur-html/body/pendaftaran/pendaftaran.php';
	}
}else{
		include '../plugins/struktur-html/body/pendaftaran/login-peserta.php';
}

include '../plugins/struktur-html/foot/footerAll.php';
include '../plugins/struktur-html/foot/scriptFoot.php';