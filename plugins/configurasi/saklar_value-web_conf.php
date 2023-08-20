<?php
//Tahapan Pendaftaran
//.....................
if(isset($_GET['tahapan'])&&$_GET['tahapan']=='costum'){

	$values = ['2021-02-15T00:01',
			'2021-04-16T23:59',
			'2021-04-17T08:15',
			'2021-04-23T16:30',
			'2021-04-26T00:01',
			'2021-06-16T23:59',
			'2021-06-17T07:30',
			'2021-06-23T16:30',
			'2021-06-24T00:01',
			'2021-08-16T23:59',
			'2021-08-18T07:30',
			'2021-08-23T16:30'];

	//Tahapan khusus Ujian
	$valueuj = ['', '07:45', '08:15', '08:15', '10:00', '10:00', '12:00'];
}

//Tahapan khusus Ujian
//.....................
$uim = implode('|-|', $valueu);
$uex = explode('|-|', $uim);

for($z=0; $z<7; $z++){
	$valueuj[] = $uex[$z];
}

for($j=1; $j<4; $j++){
	$tahapan = ['', 
			'waktu_awal_gel_'.$j, 
			'awal_gel_'.$j, 
			'waktu_akhir_gel_'.$j, 
			'akhir_gel_'.$j, 
			'waktu_test_gel_'.$j, 
			'test_gel_'.$j,
			'waktu_pengu_gel_'.$j,
			'pengu_gel_'.$j];
	
	for($i=2; $i < 10; $i=$i+2) {
		$tahapan[$i] = explode('-',$value[$tahapan[$i]]);
		$values[] = $tahapan[$i][2].'-'.$tahapan[$i][1].'-'.$tahapan[$i][0].'T'.$value[$tahapan[$i-1]];

	}//end for
}//end for


//Ruangan Ujian
//.....................
$lokasi = $valuer['lokasi'];
$alamat_lokasi = $valuer['alamat_lokasi'];

if(isset($_GET['ruangan'])&&$_GET['ruangan']=='costum'){	
	for($i=1; $i < 7; $i++){
		$valuers[] = 'Gedung D-'.$i;
	}
	for($i=1; $i < 5; $i++){
		$valuers[] = 'Gedung C-'.$i;
	}
	
	for($i=0; $i < 5; $i++){
		$pws[] = 'Sir.';
		$pws[] = 'Mam.';
	}
	$lokasi = 'Kampus 2 UM Bulukumba';
	$alamat_lokasi = 'Jl. Poros Bulukumba - Bantaeng Kel. Jalanjang Kec. Gantarang';
}

for($i='A'; $i!='K'; $i++){
$valuers[] = $valuer['gedung_'.$i];
$pws[] = $valuer['pengw_'.$i];
}



//File Pengumuman
//.....................
if(isset($_GET['lamp'])&&$_GET['lamp']== 'costum'){
$valueska = ['', 'Drs. Jumasse Basra, M.Si', '744/KEP/III.3/AU/F/2020', 'Bulukumba', '29 Agustus 2020', 'sk_rektor.pdf','656 989'];

	for($i=0; $i<7; $i++){
		$valuesks[] = $valueska[$i];
	}
}

$skim = implode('|-|', $valuesk);
$skex = explode('|-|', $skim);

for($i=0; $i<7; $i++){
	$valuesks[] = $skex[$i];
}
	
	
	
//File Admin penerimaan Camaba
//.....................
if(isset($_GET['adminp'])&&$_GET['adminp']== 'costum'){
$valueaa = ['', 'Reski Mutiara', 'Devaloper dan data', '7302070703990002', '6285825166391', 'Rp.150.000', 'Seratus Lima Puluh Ribuh Rupiah'];

	for($i=0; $i<7; $i++){
		$valueas[] = $valueaa[$i];
	}
}

$aim = implode('|-|', $valuea);
$aex = explode('|-|', $aim);

for($i=0; $i<7; $i++){
	$valueas[] = $aex[$i];
}


	
	
	
	