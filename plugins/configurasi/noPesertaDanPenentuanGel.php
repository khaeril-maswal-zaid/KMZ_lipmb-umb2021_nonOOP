<?php
//TENTUKAN GELOMBANG
//..............................

date_default_timezone_set('Asia/Makassar');

//Query	ad di query_pendaftaranS
$hs = date('d-m-Y');
$dhs = strtotime($hs);
$js = date("H:i");
$djs = strtotime($js);

$dwg1 = strtotime($value['awal_gel_1']);
$dwg2 = strtotime($value['awal_gel_2']);
$dwg3 = strtotime($value['awal_gel_3']);

$dkg1 = strtotime($value['akhir_gel_1']);
$dkg2 = strtotime($value['akhir_gel_2']);
$dkg3 = strtotime($value['akhir_gel_3']);

$dpg1 = strtotime($value['pengu_gel_1']);
$dpg2 = strtotime($value['pengu_gel_2']);
$dpg3 = strtotime($value['pengu_gel_3']);

$dwpg1 = strtotime($value['waktu_pengu_gel_1']);
$dwpg2 = strtotime($value['waktu_pengu_gel_2']);
$dwpg3 = strtotime($value['waktu_pengu_gel_3']);
		
//function bila belum
function bilabelum($gelo){
	global $value; //utk ambil tgl
	
	$ket[]= 'MOHON MAAF, Pengumuman akan tersedia pada '.$value['pengu_gel_'.$gelo];
	$ket[] = 'danger';
	$ket[] = 'disabled';

return $ket;
}

//fanction bila sudah
function bilasudah(){
	$ket[] = 'Masukkan No Peserta & Tanggsl Lahir Anda !';
	$ket[] = 'primary';
	$ket[] = '';
	
	return $ket;
}

//fction bila hari H tinggal jam
function bilatunggu($gelo){
	global $value; //utk ambil tgl

	$ket[] = 'MOHON MAAF, Pengumuman akan tersedia pada pukul '.$value['waktu_pengu_gel_'.$gelo].' WITA';	
	$ket[] = 'danger';
	$ket[] = 'readonly';
	
	return $ket;
}

//selebihnya
function lainnya(){
$ket[] = 'MOHON MAAF, Pengumuman belum tersedia.';
$ket[] = 'danger';
$ket[] = 'readonly';

return $ket;
}


//Penentuan gelombang u/ no peserta 
if($dhs >= $dwg1 && $dhs <= $dkg1){
	$gel = '1';
	$bisaMendaftar = true;
}elseif($dhs >= $dwg2 && $dhs <= $dkg2){
	$gel = '2';
	$bisaMendaftar = true;
}elseif($dhs >= $dwg3 && $dhs <= $dkg3){
	$gel = '3'; 
	$bisaMendaftar = true;
}else{
	$gel = '4';
}
	
//Open lihat pengumuman
if($dhs >= $dwg1 && $dhs < $dpg1){
	$ket = bilabelum('1');
}elseif($dhs >= $dwg2 && $dhs < $dpg2){
	$ket = bilabelum('2');
}elseif($dhs >= $dwg3 && $dhs < $dpg3){	
	$ket = bilabelum('3');	
}
	
//jika tgl skr == tgl pengu
elseif($dhs == $dpg1){	
	if($djs >= $dwpg1){
			$ket = bilasudah();
	}else{
			$ket = bilatunggu('1');
	}
}elseif($dhs == $dpg2){	
	if($djs >= $dwpg2){
			$ket = bilasudah();
	}else{
			$ket = bilatunggu('2');
	}
}elseif($dhs == $dpg3){	
	if($djs >= $dwpg3){
			$ket = bilasudah();
	}else{
			$ket = bilatunggu('3');	
	}
}

elseif($dhs > $dpg1||$dhs > $dpg2||$dhs > $dpg3){
	$ket = bilasudah();
}else{
	$ket = lainnya();
}



//TENTUKAN NO PESERTA
//..............................
$datacamaba = dcmb("SELECT * FROM datacamaba WHERE no_peserta !='' ORDER BY no_peserta DESC");
$valuer = dcmb("SELECT * FROM konfigurasi_web_a")[0];
//untuk set Awal no peserta
if(!$datacamaba){
	$no_psr = '221-51-21-1'; //To databases C
	$no_psr = trim($no_psr);
	
	$id_file4 = "A"; //To databases A
	$gedung = $valuer['gedung_A']; //To databases B
}else{
	// ambil data terakhir no_peserta
	$no_psr = $datacamaba[0]["no_peserta"];
	$no_psr = explode('-',$no_psr);
	$no_psr0 = $no_psr[0];
	$no_psr1 = $no_psr[1];
	$no_psr2 = $no_psr[2];
	$no_psr3 = $gel;

	$id_file4 = $datacamaba[0]["id_file4"]; //To databases A

	if($no_psr2 >= 45){
		$no_psr1++;
		$no_psr2 = 21;
		
		$id_file4++; //To databases A
	}

	if(isset($valuer)){
		//$gedung = $valuer['gedung_'.$id_file4]; //To databases B
	}

	$no_psr2++;
	$no_psr = $no_psr0.'-'.$no_psr1.'-'.$no_psr2.'-'.$no_psr3;
	$no_psr = trim($no_psr); //To databases C
}