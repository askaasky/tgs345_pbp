<?php
$host = 'localhost';
$db   = 'mahasiswa1';
$user = 'root';
$pass = '12345';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Koneksi gagal");
}

echo "ID user: ";
$id = trim(fgets(STDIN));

echo "Username baru: ";
$username = trim(fgets(STDIN));

echo "Email baru: ";
$email = trim(fgets(STDIN));

$sql = "UPDATE user SET username=?, email=?, updated_at=? WHERE id=?";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    $username,
    $email,
    time(),
    $id
]);

echo "Update selesai\n";
?>