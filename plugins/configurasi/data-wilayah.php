<?php

//Panggil koneksi
	include("function.php");     
	switch ($_GET['jenis']) {
		//ambil data kota / kabupaten
		case 'kota':
		$id_provinces = $_POST['id_provinces'];
		if($id_provinces == ''){
		     exit;
		}else{
		     $getcity = mysqli_query($conn, "SELECT  * FROM regencies WHERE province_id ='$id_provinces' ORDER BY name ASC") or die ('Query Gagal');
		     while($data = mysqli_fetch_array($getcity)){
		          echo '<option value="'.$data['id'].'">'.$data['name'].'</option>';
		     }
		     exit;    
		}
		break;
		
	} 
	
	
	
	
	