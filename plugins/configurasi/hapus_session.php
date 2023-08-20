<?php 
//nonaktifkan session
$_SESSION = [];
session_unset();
session_destroy();