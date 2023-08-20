<?php
$judul = "Informasi pendaftaran | ";

//panggil query user
include '../plugins/configurasi/query-for-user.php';

//HTML
include '../plugins/struktur-html/head/headAll.php';
include '../plugins/struktur-html/head/navbar-fitur.php';

include '../plugins/struktur-html/body/informasi-pendaftaran/kop.php';
include '../plugins/struktur-html/body/informasi-pendaftaran/spp.php';

$ft = 'footersS';//BACAI!

include '../plugins/struktur-html/foot/footerAll.php';
include '../plugins/struktur-html/foot/scriptFoot.php';

