<?php
// ========================================
// 1. Fungsi menentukan bilangan terbesar
// ========================================
function bilanganTerbesar($bil1, $bil2) {
    if ($bil1 > $bil2) {
        return $bil1;
    } else {
        return $bil2;
    }
}

// Contoh penggunaan fungsi bilanganTerbesar
$angka1 = 100;
$angka2 = 150;
$terbesar = bilanganTerbesar($angka1, $angka2);

echo "<h3>1. Fungsi Bilangan Terbesar</h3>";
echo "Bilangan 1: $angka1<br>";
echo "Bilangan 2: $angka2<br>";
echo "Bilangan terbesar adalah: <strong>$terbesar</strong><br><br>";

echo "<h3>2. Tanggal menggunakan getdate()</h3>";

$tanggalSekarang = getdate();
$tanggal = $tanggalSekarang['mday'];
$bulan = $tanggalSekarang['mon'];
$tahun = $tanggalSekarang['year'];

// Format: dd-mm-yyyy
echo "Tanggal sekarang: <b>$tanggal</b>-<b>$bulan</b>-<b>$tahun</b><br><br>";




echo "<h3>3. Tanggal dengan date</h3>";

$tgl = date('d-F-Y');   
echo "Tanggal sekarang: <b>$tgl</b><br><br>";


?>