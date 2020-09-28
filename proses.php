<?php
$bilangan1 = $_GET['bilangan1'];
$bilangan2 = $_GET['bilangan2'];
$hitung = $_GET['hitung'];
echo "Bilangan 1 adalah $bilangan1 <br>";
echo "Bilangan 2 adalah $bilangan2 <br>";

if ($hitung == 1) {
	$tambah = $bilangan1 + $bilangan2;
	echo "Hasil pertambahan adalah $tambah";
}
elseif ($hitung == 2) {
	$kurang = $bilangan1 - $bilangan2;
	echo "Hasil pengurangan adalah $kurang";
}
elseif ($hitung == 3) {
	$kali = $bilangan1 * $bilangan2;
	echo "Hasil perkalian adalah $kali";
}
elseif ($hitung == 4) {
	$bagi = $bilangan1 / $bilangan2;
	echo "Hasil pembagian adalah $bagi";
}
?>
