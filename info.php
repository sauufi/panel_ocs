<?php
date_default_timezone_set('Asia/Jakarta');

$tgl1 = "2017-08-01";
$tgl2 = date("Y-m-d");
 
$selisih = strtotime($tgl2) -  strtotime($tgl1);
$del = $selisih;
                //60 detik * 60 menit * 24 jam = 1 hari
 
echo "Selisih tanggal $tgl2 dan $tgl1 adalah $del ";

if ($del==259200){
	echo 'abc';
}
?>