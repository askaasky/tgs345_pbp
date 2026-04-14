<?php
// menjalankan kode php di web server
// saya menggunakan Laragon sebagai web server lokal

echo "<h3>Saya memakai laragon untuk menjalankan PHP web server</h3>";

// KONEKSI DATABASE (pakai PDO - lebih bagus)
$host = 'localhost';
$db   = 'mahasiswa1';
$user = 'root';
$pass = '12345';

$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// QUERY DATA
$sql = "SELECT * FROM user";
$users = $pdo->query($sql)->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas 5 - Web Server PHP</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f8;
            padding: 20px;
        }
        h2, h3 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: auto;
            background: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>

<body>

<h2>Data User</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
    </tr>

    <?php if (count($users) > 0): ?>
        <?php foreach ($users as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['username']; ?></td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Tidak ada data</td>
        </tr>
    <?php endif; ?>

</table>

</body>
</html>