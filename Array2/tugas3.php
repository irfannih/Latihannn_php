<?php
// Membuat array asosiatif multidimensi
$produk = [
    [
        "nama" => "Laptop ASUS ROG",
        "kategori" => "Elektronik",
        "harga" => 15000000,
        "rating" => 4.8
    ],
    [
        "nama" => "Smartphone Samsung",
        "kategori" => "Gadget",
        "harga" => 10000000,
        "rating" => 4.6
    ],
    [
        "nama" => "Headset Logitech",
        "kategori" => "Aksesoris",
        "harga" => 2000000,
        "rating" => 4.5
    ]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

// Cetak hasil
echo "Produk dengan harga tertinggi:<br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>
