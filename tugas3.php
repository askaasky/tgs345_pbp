<?php
// Array Function
// is_array()
// count()
// sort()
// shuffle()

$arrString = ['Karina', 'Giselle', 'Winter', 'Ningning'];

// cek apakah variabel array
if (is_array($arrString)) {
    echo "Ini adalah array\n\n";
}

// menghitung jumlah elemen array
$panjangArr = count($arrString);
echo "Jumlah member aespa: $panjangArr\n\n";

// tampil sebelum diurutkan
echo "Sebelum sort:\n";
print_r($arrString);
echo "\n";

// mengurutkan array (A-Z)
sort($arrString);
echo "Setelah sort (A-Z):\n";
print_r($arrString);
echo "\n";

// mengacak urutan array
shuffle($arrString);
echo "Setelah shuffle (acak):\n";
print_r($arrString);
echo "\n";

// STRING
$namaMember = $arrString[0];
$sub = substr($namaMember, 0, 3);

echo "Member terpilih: $namaMember\n";
echo "Substring 3 huruf pertama: $sub\n";
?>