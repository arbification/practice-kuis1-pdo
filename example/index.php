<?php
// Without UI
// require_once 'Buku.php';
// require_once 'DatabaseHelper.php';

// $dbHelper = new DatabaseHelper();

// // Menambah buku baru
// $bukuBaru = new Buku("Judul Buku Baru", "Penulis Baru", 2023);
// $dbHelper->tambahBuku($bukuBaru);

// // Mengedit buku
// $bukuDiedit = $dbHelper->getDaftarBuku()[0];
// $bukuDiedit->setJudul("Judul Buku Diedit");
// $dbHelper->editBuku($bukuDiedit);

// // Menghapus buku
// $dbHelper->hapusBuku($bukuDiedit->getId());

// // Menampilkan daftar buku
// $daftarBuku = $dbHelper->getDaftarBuku();
// foreach ($daftarBuku as $buku) {
//     echo "Judul: " . $buku->getJudul() . "<br>";
//     echo "Pengarang: " . $buku->getPengarang() . "<br>";
//     echo "Tahun Terbit: " . $buku->getTahunTerbit() . "<br>";
//     echo "<hr>";
// }

// With UI
require_once 'Buku.php';
require_once 'DatabaseHelper.php';

$dbHelper = new DatabaseHelper();
$daftarBuku = $dbHelper->getDaftarBuku();

// Tambah buku baru
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tambah"])) {
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $tahunTerbit = $_POST["tahunTerbit"];

    $bukuBaru = new Buku($judul, $pengarang, $tahunTerbit);
    $dbHelper->tambahBuku($bukuBaru);

    header("Location: " . $_SERVER["PHP_SELF"]); // Redirect ke halaman ini setelah menambah buku
    exit;
}

// Edit buku
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit"])) {
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $tahunTerbit = $_POST["tahunTerbit"];

    $bukuDiedit = new Buku($judul, $pengarang, $tahunTerbit);
    $bukuDiedit->setId($id);
    $dbHelper->editBuku($bukuDiedit);

    header("Location: " . $_SERVER["PHP_SELF"]); // Redirect ke halaman ini setelah mengedit buku
    exit;
}

// Hapus buku
if (isset($_GET["hapus"])) {
    $id = $_GET["hapus"];
    $dbHelper->hapusBuku($id);

    header("Location: " . $_SERVER["PHP_SELF"]); // Redirect ke halaman ini setelah menghapus buku
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color:#f5f5f5;}
    </style>
</head>
<body>
    <a href="/">Kembali</a>
    <h1>Daftar Buku</h1>

    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarBuku as $buku): ?>
            <tr>
                <td><?php echo $buku->getJudul(); ?></td>
                <td><?php echo $buku->getPengarang(); ?></td>
                <td><?php echo $buku->getTahunTerbit(); ?></td>
                <td>
                    <a href="#" onclick="showEditForm(<?php echo $buku->getId(); ?>, '<?php echo $buku->getJudul(); ?>', '<?php echo $buku->getPengarang(); ?>', <?php echo $buku->getTahunTerbit(); ?>)">Edit</a>
                    <a href="?hapus=<?php echo $buku->getId(); ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Tambah Buku</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="tambah" value="1">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required><br>

        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" required><br>

        <label for="tahunTerbit">Tahun Terbit:</label>
        <input type="number" id="tahunTerbit" name="tahunTerbit" required><br>

        <button type="submit">Tambah Buku</button>
    </form>

    <h2>Edit Buku</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="editBukuForm" style="display:none;">
        <input type="hidden" name="edit" value="1">
        <input type="hidden" id="editId" name="id">
        <label for="editJudul">Judul:</label>
        <input type="text" id="editJudul" name="judul" required><br>

        <label for="editPengarang">Pengarang:</label>
        <input type="text" id="editPengarang" name="pengarang" required><br>

        <label for="editTahunTerbit">Tahun Terbit:</label>
        <input type="number" id="editTahunTerbit" name="tahunTerbit" required><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <script>
        function showEditForm(id, judul, pengarang, tahunTerbit) {
            document.getElementById("editId").value = id;
            document.getElementById("editJudul").value = judul;
            document.getElementById("editPengarang").value = pengarang;
            document.getElementById("editTahunTerbit").value = tahunTerbit;
            document.getElementById("editBukuForm").style.display = "block";
        }
    </script>
</body>
</html>