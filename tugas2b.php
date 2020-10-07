<?php
	$beli=50000;
	$jual=80000;
	$untung=($jual-$beli);

	echo "Harga Beli = Rp ", $beli, "<br>";
	echo "Harga Jual = Rp ", $jual, "<br>";
	echo "Keuntungan = ? <br>";
	echo "Jawaban : " ;
	print_r($untung);

?>
