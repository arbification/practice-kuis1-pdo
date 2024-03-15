<?php
// Hak Akses
class Laptop {
    // Property
    protected $pemilik = "Anto";
    private $merk = "Asus";
    public $ukuran_layar = "15 inch";

    // Method
    public function akses_pemilik() {
        return $this->pemilik;
    }
    protected function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }
    public function paksa_hidup() {
        return $this->hidupkan_laptop();
    }
}

// Object
$laptop_anto = new Laptop();

// Get Property
echo "Pemilik : " . $laptop_anto->akses_pemilik() . "<br>";
echo "Ukuran Layar : " . $laptop_anto->ukuran_layar . "<br>";

// Method
echo $laptop_anto->paksa_hidup() . "<br>";
echo $laptop_anto->akses_pemilik() . "<br>";
// echo $laptop_anto->hidupkan_laptop() . "<br>";

echo "<hr>";
highlight_file(__FILE__);
?>