<?php
//aktifkan sessions	
SESSION_START();

// connect to databases
require 'function.php';


//informasi pembayaranS
//..............................
//menampilkan admin penerimaan cmb
$valuea = dcmb("SELECT * FROM konfigurasi_web_d")[0];

//menampilkan biaya pendaftaran
//..............................
$valuebp = dcmb("SELECT * FROM konfigurasi_web_g")[0];

//Buka tutup lihat pengumuman
//berdasrkan tgl yg diset oleh adm
$value = dcmb("SELECT * FROM konfigurasi_web_b")[0];



if(isset($_SESSION["no_peserta"])){
	$no_pst = $_SESSION["no_peserta"];
 
	// ambil data
 $dtcmb = dcmb("SELECT * FROM datacamaba WHERE no_peserta = '$no_pst'")[0];

}


//PendaftaranS
//..............................
if(isset($_SESSION["id"])) {

//terims dari login
$id = $_SESSION["id"];//dari login

//ambil data tampilkan di pedaftraan readonly
$dtcmb = dcmb("SELECT * FROM datacamaba WHERE id=$id")[0];
  
//tentukan tanggal ujian peserta
//kartu peserta
$value = dcmb("SELECT * FROM konfigurasi_web_b")[0];
  
//tentukan waktu ujian
//kartu peserta
$valueu = dcmb("SELECT * FROM konfigurasi_web_e")[0]; 
  
//tentukan ruangan ujian peserta
//sebagai pengkondisian no peseta
//tentukan lokasi ujian peserta 
//kartu peserta
$valuer = dcmb("SELECT * FROM konfigurasi_web_a")[0];

}


//SPP
//..............................
$valuespp = dcmb("SELECT * FROM konfigurasi_web_f")[0];

$exspp = explode(';', $valuespp['spp']);


//UNDUH SKR PENGUMUMAN
//..............................
$valuesk = dcmb("SELECT * FROM konfigurasi_web_c")[0];




