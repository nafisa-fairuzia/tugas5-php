<?php
function sisi_miring($alas, $tinggi) {
    return sqrt(($alas * $alas) + ($tinggi * $tinggi));
}
function luas_segitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}
function keliling_segitiga($alas,$tinggi,$sisi_miring) {
    return $alas + $tinggi + $sisi_miring;
}

$alas = 3;   
$tinggi = 4; 
$sisi_miring = sisi_miring($alas, $tinggi);
$luas_segitiga = luas_segitiga($alas, $tinggi);
$keliling_segitiga = keliling_segitiga($alas, $tinggi, $sisi_miring);

echo "Sisi miring segitiga dengan alas $alas dan tinggi $tinggi adalah: $sisi_miring <br>";
echo "Luas segitiga adalah: $luas_segitiga <br>";
echo "Keliling segitiga adalah: $keliling_segitiga <br>";
?>