<?php
$user = "admin";

switch ($user) {
    case "admin":
        echo "Selamat datang Admin";
        break;
    case "user":
        echo "Selamat datang User";
        break;
    case "guest":
        echo "Selamat datang Tamu";
        break;
    default:
        echo "User tidak dikenal";
}
?>