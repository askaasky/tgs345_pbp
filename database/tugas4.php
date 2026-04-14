<?php
$host = 'localhost';
$db   = 'mahasiswa1';
$user = 'root';
$pass = '12345';

// ini adalah fitur untuk mengupdate data user melalui CLI

// ==========================
// KONFIGURASI DATABASE
// ==========================
$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Koneksi DB gagal: " . $e->getMessage());
}

// ==========================
// INPUT DARI CLI
// ==========================
echo "Masukkan ID user yang ingin diupdate: ";
$id = trim(fgets(STDIN));

echo "Masukkan username baru: ";
$username = trim(fgets(STDIN));

echo "Masukkan email baru: ";
$email = trim(fgets(STDIN));

// ==========================
// QUERY UPDATE
// ==========================
$sql = "UPDATE user SET username = :username, email = :email, updated_at = :updated_at WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $username,
    ':email' => $email,
    ':updated_at' => time(),
    ':id' => $id
]);

echo "User berhasil diupdate\n";
?>