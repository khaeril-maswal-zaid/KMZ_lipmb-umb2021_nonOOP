<?php
$judul = "Registrasi peserta | ";

//panggil query user
include '../plugins/configurasi/query-for-user.php';

//data dikirim ke pembayaran & sign-in melualui session
if(isset($_POST["regis"])) {		
		$_SESSION["regis"] = $_POST;	
}

//ulangi ketika tekan tombol ulang
if(isset($_GET["ulangi"])&&$_GET["ulangi"] == "registrasi") {
	require "../plugins/configurasi/hapus_session.php";
	header("location: ../registrasi");
}

//HTML
include '../plugins/struktur-html/head/headAll.php';
include '../plugins/struktur-html/head/navbar-fitur.php';

if(isset($_SESSION["info"] )) {	
		include '../plugins/struktur-html/body/registrasi/informasi-pembayaran.php';
}elseif(isset($_SESSION["regis"] )) {	
		include '../plugins/struktur-html/body/registrasi/komfirmasi-data-peserta.php';
}else{
		include '../plugins/struktur-html/body/registrasi/registrasi.php';
}


include '../plugins/struktur-html/foot/footerAll.php';
include '../plugins/struktur-html/foot/scriptFoot.php';
