<?php
class DatabaseHelper
{
    private $host = 'localhost';
    private $dbname = 'perpus_pdo';
    private $username = 'root';
    private $password = '';
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
            exit;
        }
    }

    public function tambahBuku($buku)
    {
        $sql = "INSERT INTO buku (judul, pengarang, tahun_terbit) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$buku->getJudul(), $buku->getPengarang(), $buku->getTahunTerbit()]);
    }

    public function editBuku($buku)
    {
        $sql = "UPDATE buku SET judul = ?, pengarang = ?, tahun_terbit = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$buku->getJudul(), $buku->getPengarang(), $buku->getTahunTerbit(), $buku->getId()]);
    }

    public function hapusBuku($id)
    {
        $sql = "DELETE FROM buku WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
    }

    public function getDaftarBuku()
    {
        $sql = "SELECT * FROM buku";
        $stmt = $this->db->query($sql);
        $daftarBuku = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $buku = new Buku($row['judul'], $row['pengarang'], $row['tahun_terbit']);
            $buku->setId($row['id']);
            $daftarBuku[] = $buku;
        }

        return $daftarBuku;
    }
}
?>