<?php
	if (isset($_FILES["file"]["name"])) {
	   $nama = $_GET['nama'];
		$test = explode('.', $_FILES["file"]["name"]);
		 $ext = end($test);
		 $name = uniqid($nama).'.'.$ext;
		 $location = 'inputan-user/foto-peserta/' . $name;
		 move_uploaded_file($_FILES["file"]["tmp_name"], '../'.$location);
		 echo '<img src="../plugins/'.$location.'" height="80" width="155" class="img-thumbnail" />';
		 echo '<input type="hidden" name="file1b" value="'.$name.'" class="form-control">';
	
	} 
	
	
