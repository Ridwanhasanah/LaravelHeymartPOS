<?php 

/*
	Cara menggunakan number_format();

	number_format(angka,angka_di_belakang_koma,pemisah_desimal,pemisah_ribuan);

	$angka = "20000000";

	echo number_format($angka);
	// hasilnya : 20,000,000

	echo "<br/>";

	echo number_format($angka,2);
	// hasilnya : 20,000,000.00

	echo "<br/>";

	echo number_format($angka,2,",",".");
	// hasilnya : 20.000.000,00

	echo "<br/>";

	echo "Rp. " . number_format($angka) . ",-";
	// hasilnya : Rp. 20,000,000 ,-

*/
function format_uang($angka){

	$hasil = number_format($angka, 0, ',', '.');
	return $hasil;
}

?>