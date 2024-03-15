<?php
// Menampilkan isi direktori
echo "<h1>Daftar File</h1>";
echo "<hr>";
echo "<h3>Folder Explain</h3>";
$daftarFile = scandir('explain');
foreach ($daftarFile as $file) {
    if ($file != '.' && $file != '..') {
        echo "<a href='explain/$file'>• $file</a><br>";
    }
}
echo "<hr>";
echo "<h3>Folder Example</h3>";
echo "<a href='example'>> Demo</a></br>";
echo "<a href='example/soal.md'>• soal.md</a><br>";
?>