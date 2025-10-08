<?php
// Membuat array 2 dimensi 3x3 berisi angka acak (1–9)
$angka = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $angka[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks
echo "<b>Matriks 3x3:</b><br>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $angka[$i][$j] . " ";
        $total += $angka[$i][$j];
    }
    echo "<br>";
}

// Tampilkan jumlah total semua elemen
echo "<br><b>Jumlah total semua elemen: $total</b>";
?>
