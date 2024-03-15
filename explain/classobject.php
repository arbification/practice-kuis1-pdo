<?php
// Kelas
class Laptop {
    // Property
    var $pemilik;
    var $merk;
    var $ukuran_layar;
    var $warna;
    var $harga;
    // Method
    function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }
    function matikan_laptop() {
        return "Matikan Laptop";
    }
    function restart_laptop() {
        return "Restart Laptop";
    }
}

// Object
$laptop_anto = new Laptop();
$laptop_andi = new Laptop();
$laptop_dina = new Laptop();

// Set Property
$laptop_anto->pemilik = "Anto";
$laptop_anto->merk = "Asus";
$laptop_anto->ukuran_layar = "15 inch";

$laptop_andi->pemilik = "Andi";
$laptop_andi->merk = "Acer";
$laptop_andi->ukuran_layar = "14 inch";

$laptop_dina->pemilik = "Dina";
$laptop_dina->merk = "Lenovo";
$laptop_dina->ukuran_layar = "13 inch";

// Get Property
echo "Pemilik : " . $laptop_anto->pemilik . "<br>";
echo "Merk : " . $laptop_anto->merk . "<br>";
echo "Ukuran Layar : " . $laptop_anto->ukuran_layar . "<br>";

echo "<hr>";

echo "Pemilik : " . $laptop_andi->pemilik . "<br>";
echo "Merk : " . $laptop_andi->merk . "<br>";
echo "Ukuran Layar : " . $laptop_andi->ukuran_layar . "<br>";

echo "<hr>";

echo "Pemilik : " . $laptop_dina->pemilik . "<br>";
echo "Merk : " . $laptop_dina->merk . "<br>";
echo "Ukuran Layar : " . $laptop_dina->ukuran_layar . "<br>";

echo "<hr>";

// Method
echo $laptop_anto->hidupkan_laptop() . "<br>";
echo $laptop_anto->matikan_laptop() . "<br>";

echo "<hr>";
highlight_file(__FILE__);
?>