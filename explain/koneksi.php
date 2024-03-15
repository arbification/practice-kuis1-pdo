<?php
// Untuk membuat koneksi ke database menggunakan PDO
// Perlu membuat instance PDO dengan menyediakan parameter DSN (Data Source Name), username, dan password.
$host = 'localhost';
$dbname = 'contoh';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Koneksi berhasil";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

// Select data
$sql = "SELECT * FROM users";
$result = $db->query($sql);

foreach ($result as $row) {
    echo $row['username'] . "<br>";
}

// Insert data
$sql = "INSERT INTO users (username, password) VALUES ('john', 'john123')";
$db->exec($sql);

// Select prepared statement with multiple parameters
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $db->prepare($sql);
$stmt->execute(['username' => 'john', 'password' => 'john123']);
$result = $stmt->fetch();

echo $result['username'];

// Select execute with multiple parameters
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $db->prepare($sql);
$stmt->execute(['john', 'john123']);
$result = $stmt->fetch();

echo $result['username'];

// Update data
$sql = "UPDATE users SET password='john1234' WHERE username='john'";
$db->exec($sql);

// Delete data
$sql = "DELETE FROM users WHERE username='john'";
$db->exec($sql);

echo "<hr>";
highlight_file(__FILE__);
?>