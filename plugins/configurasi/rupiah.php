<?php
function rupiah($angka){
    $hp = "Rp. ".number_format($angka,0,',','.');
    return $hp;
}