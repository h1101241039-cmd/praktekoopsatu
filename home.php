<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Selamat datang, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>Anda berhasil login.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
