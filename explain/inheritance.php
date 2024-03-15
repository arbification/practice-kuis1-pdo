<?php
// Kelas induk
class Hewan {
    public $nama;

    public function bersuara() {
        echo "Hewan bersuara.";
    }
}

// Kelas turunan
class Anjing extends Hewan {
    public function bersuara() {
        echo "Anjing menggonggong.";
    }
}

// Menggunakan kelas turunan
$anjing = new Anjing();
$anjing->nama = "Buddy";
$anjing->bersuara(); // Output: Anjing menggonggong.

echo "<hr>";
highlight_file(__FILE__);
?>