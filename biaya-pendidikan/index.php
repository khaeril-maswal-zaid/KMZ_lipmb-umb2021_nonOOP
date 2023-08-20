<?php
$judul = "Biaya pendidikan | ";

//panggil query user dan rupiah sistem
include '../plugins/configurasi/query-for-user.php';
include '../plugins/configurasi/rupiah.php';

//HTML
include '../plugins/struktur-html/head/headAll.php';
include '../plugins/struktur-html/head/navbar-fitur.php';

$ft = 'footers';//BACAI!
include '../plugins/struktur-html/body/biaya-pendidikan/bp.php';

include '../plugins/struktur-html/foot/footerAll.php';
include '../plugins/struktur-html/foot/scriptFoot.php';

