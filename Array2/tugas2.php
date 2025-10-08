<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Buah pertama: " . $buah[0][0] . "<br>";

// 2. Hitung total nilai stok * harga
$total = 0;
foreach ($buah as $b) {
    $total += $b[1] * $b[2];
}
echo "Total nilai semua buah: Rp $total";
?>
