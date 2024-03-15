<?php
// Untuk membuat koneksi ke database menggunakan PDO
// Perlu membuat instance PDO dengan menyediakan parameter DSN (Data Source Name), username, dan password.

// Using Class
class User
{
    private $host = 'localhost';
    private $dbname = 'contoh';
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

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        // $stmt = $this->db->query($sql);
        // $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $query = $this->db->query($sql);
        $query->execute();
        return $query;
    }

    public function addUser($username, $password)
    {
        $query = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        if (!$query) {
            return "Gagal menambahkan user";
        } else {
            return "Berhasil menambahkan user";
        }
    }

    public function editUser($id, $username, $password)
    {
        $query = $this->db->prepare("UPDATE users SET username = :username, password = :password WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        if (!$query) {
            return "Gagal mengedit user";
        } else {
            return "Berhasil mengedit user";
        }
    }

    public function deleteUser($id)
    {
        $query = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if (!$query) {
            return "Gagal menghapus user";
        } else {
            return "Berhasil menghapus user";
        }
    }

    public function getUserById($id)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if (!$query) {
            return "Gagal mengambil user";
        } else {
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }
}

// Without using class
// $host = 'localhost';
// $dbname = 'contoh';
// $username = 'root';
// $password = '';

// try {
//     $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     echo "Koneksi berhasil";
// } catch (PDOException $e) {
//     echo "Koneksi gagal: " . $e->getMessage();
// }

// // Select data
// $sql = "SELECT * FROM users";
// $result = $db->query($sql);

// foreach ($result as $row) {
//     echo $row['username'] . "<br>";
// }

// // Insert data
// $sql = "INSERT INTO users (username, password) VALUES ('john', 'john123')";
// $db->exec($sql);

// // Select prepared statement with multiple parameters
// $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
// $stmt = $db->prepare($sql);
// $stmt->execute(['username' => 'john', 'password' => 'john123']);
// $result = $stmt->fetch();

// echo $result['username'];

// // Select execute with multiple parameters
// $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
// $stmt = $db->prepare($sql);
// $stmt->execute(['john', 'john123']);
// $result = $stmt->fetch();

// echo $result['username'];

// // Update data
// $sql = "UPDATE users SET password='john1234' WHERE username='john'";
// $db->exec($sql);

// // Delete data
// $sql = "DELETE FROM users WHERE username='john'";
// $db->exec($sql);

echo "<hr>";
highlight_file(__FILE__);
?>