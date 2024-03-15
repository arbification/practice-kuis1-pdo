<?php
// Kelas
class Mobil {
    public $merk;
    public $warna;

    public function jalankan() {
        echo "Mobil " . $this->merk . " berwarna " . $this->warna . " sedang berjalan.";
    }
}

// Membuat objek dari kelas Mobil
$mobilku = new Mobil();
$mobilku->merk = "Toyota";
$mobilku->warna = "Merah";
$mobilku->jalankan(); // Output: Mobil Toyota berwarna Merah sedang berjalan.

echo "<hr>";
highlight_file(__FILE__);
?>