<?php
	if (isset($_FILES["file"]["name"])) {
		$test = explode('.', $_FILES["file"]["name"]);
		 $ext = end($test);
		 $name = uniqid() . '.' . $ext;
		 $location = 'inputan-user/foto-admin/' . $name;
		 move_uploaded_file($_FILES["file"]["tmp_name"], '../'.$location);
		 echo '<img src="../plugins/'.$location.'" height="145" />';
		 echo '<input type="hidden" name="fotob" value="'.$name.'" class="form-control">';
	}
?>