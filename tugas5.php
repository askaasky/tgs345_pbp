<?php
// Menjalankan PHP di web server
// Saya menggunakan Laragon sebagai web server lokal

echo "<h3 align='center'>Menampilkan Data User Sistem</h3>";

// KONEKSI DATABASE
$host = 'localhost';
$db   = 'mahasiswa1';
$user = 'root';
$pass = '12345';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $conn = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Tidak bisa koneksi database");
}

// AMBIL DATA USER
$query = "SELECT id, username FROM user";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web PHP - Tugas 5</title>
    <style>
        body {
            font-family: sans-serif;
            background: #eef1f5;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
            background: #fff;
        }
        th {
            background: #28a745;
            color: white;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: center;
        }
    </style>
</head>

<body>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
    </tr>

    <?php foreach ($result as $data): ?>
    <tr>
        <td><?= $data['id']; ?></td>
        <td><?= $data['username']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>