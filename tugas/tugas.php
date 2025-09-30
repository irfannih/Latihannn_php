<?php
echo "<h2>PERULANGAN DARI 100 SAMPAI 1000</h2>";

// iMenggunakan FOR
echo "<h3>1. Ini FOR</h3>";
for($i=100; $i<=1000; $i++) {
    echo "Nilai : ".$i."<br>"; // ini kegunaanya agar setiap nilai langsung turun ke bawah
}

echo "<hr>";

//  ini while
echo "<h3>2. Ini WHILE</h3>";
$j=100;
while($j<=1000) {
    echo "Nilai : ".$j."<br>";
    $j++;
}

echo "<hr>";

// Ending
echo "<h2>Selesai Sudah Tugas saya</h2>";
?>
