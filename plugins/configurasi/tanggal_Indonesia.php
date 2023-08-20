<?php
function tgl_ina($tgl){
	$bulan =  [1 =>	'Januari',
															'Februari',
															'Maret',
															'April',
															'Mei',
															'Juni',
															'Juli',
															'Agustus',
															'September',
															'Oktober',
															'November',
															'Desember'
	];
	
	$exp = explode('-', $tgl);

	return $exp[0] .' '.$bulan[ (int)$exp[1] ] .' '.$exp[2];
}
 











