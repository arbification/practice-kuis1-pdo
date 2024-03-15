<?php
// Kelas induk
class Komputer {
    // Property
    protected $processor = "Intel Core i7";
    private $memory = "4GB";
    public function get_memory() {
        return $this->memory;
    }
}

// Kelas turunan
class Laptop extends Komputer {
    // Property
    public $ukuran_layar = "15 inch";
    // Method
    public function get_processor() {
        return $this->processor;
    }
    // public function get_memory() {
    //     return $this->memory; // undefined property
    // }
}

// Object
$laptop_anto = new Laptop();
$komputer_baru = new Komputer();

// Get Property
echo "Processor : " . $laptop_anto->get_processor() . "<br>";
echo "Ukuran Layar : " . $laptop_anto->ukuran_layar . "<br>";
echo "Memory : " . $laptop_anto->get_memory() . "<br>";

echo "<hr>";
highlight_file(__FILE__);
?>