<?php
$nilai = 120; // misalnya nilai yang mau dicek

 echo "Nilai yang anda cari : ".$nilai ."<br>"; 
 
if ($nilai >= 0 && $nilai <= 10) {
    echo "Nilai Huruf: E";
} elseif ($nilai >= 11 && $nilai <= 50) {
    echo "Nilai Huruf: D";
} elseif ($nilai >= 51 && $nilai <= 60) {
    echo "Nilai Huruf: C";
} elseif ($nilai >= 61 && $nilai <= 79) {
    echo "Nilai Huruf: B";
} elseif ($nilai >= 80 && $nilai <= 100) {
    echo "Nilai Huruf: A";
} else {
    echo "Nilai yang anda cari TIDAK VALID!!!!";
}
?>
