<?php
// array disebut juga sekumpulan data
// array numerik dan array asosiatif
// untuk memanggil array menggunakan perulangan foreach

//1. Array numerik
$arBuah = array ('pepaya', 'mangga', 'pisang', 'jeruk');
// cetak indeks ke -
echo $arBuah[1];
echo '<br>';
// jumlah total buah
$jumlah = count($arBuah);
echo $jumlah;
echo '<br>';
// lihar hasil sekumpulan data buah dengan foreach
foreach ($arBuah as $value) {
echo '<li>'. $value. '</li>';
}
echo '<br>';
foreach ($arBuah as $index => $value) {
    echo "$index $value <br>";
}

//2. Array asosiatif
$ar_sisga = array (10=>'luluk', 20=>'angga', 30=>'adi', 'afif');
foreach ($arBuah as $index => $value) {
    echo "$index $value <br>";
}


?>