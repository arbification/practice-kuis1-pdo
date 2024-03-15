<?php
// Hak Akses
class Orang {
    public $nama; // dapat diakses dari mana saja
    protected $umur; // dapat diakses dari kelas Orang dan kelas turunannya
    private $nomorIdentitas; // hanya dapat diakses dari dalam kelas Orang

    public function tampilkanUmur() {
        echo "Umur: " . $this->umur;
    }
}

echo "<hr>";
highlight_file(__FILE__);
?>