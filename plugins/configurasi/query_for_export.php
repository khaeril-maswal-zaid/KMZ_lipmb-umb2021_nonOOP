<?php
// connect to function
require 'function.php';

//untuk mengambil no sk rektor
//exp_lampiran_pengumuman
$valuesk = dcmb("SELECT * FROM konfigurasi_web_c")[0];
  
// query data pendaftaranS
 $datacamaba_pendaftaran = mysqli_query($conn, "SELECT * FROM datacamaba WHERE no_peserta != '' ORDER BY no_peserta ASC");

// query data Registrasi
 $datacamaba_registrasi = mysqli_query($conn, "SELECT * FROM datacamaba WHERE no_peserta = '' ORDER BY no_peserta ASC");
 
 if(isset($_GET['gel'])){
 	$gel = $_GET['gel']; 
 	$datacamaba_pendaftaran = mysqli_query($conn, "SELECT * FROM datacamaba WHERE pilihan_kuliah != '' && gelombang = $gel");
 }
 
$x = date('d-m-Y').".xls";
 
header("Content-Type: application/vnd-ms-excel");
header("pragma: no-cache");
header("Expires: 0");




