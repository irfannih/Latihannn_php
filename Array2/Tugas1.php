<?php

$mahasiswa = array(
    array("Irfan", 85, 90),
    array("Yased", 78, 88),
    array("Dimas Boti", 92, 95)
);

echo "<h3>Nilai UI/UX mahasiswa ke-2</h3>";
echo "Nama: " . $mahasiswa[1][0] . "<br>";
echo "Nilai Bahasa: " . $mahasiswa[1][2] . "<br><br>";


echo "<h3>Daftar Nilai Semua Mahasiswa</h3>";

for ($i = 0; $i < count($mahasiswa); $i++) {
    echo "Nama: <b>" . $mahasiswa[$i][0] . "</b><br>";
    echo "Nilai Basis Data: " . $mahasiswa[$i][1] . "<br>";
    echo "Nilai UI/UX : " . $mahasiswa[$i][2] . "<br>";
    echo "<hr>"; 
}
?>
