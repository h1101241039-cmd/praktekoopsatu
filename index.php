<?php
// index.php
date_default_timezone_set("Asia/Jakarta"); // atur timezone

// Ambil nama dari input (GET/POST), default "Peserta Praktik"
$nama = isset($_POST['nama']) && $_POST['nama'] !== "" ? $_POST['nama'] : "Peserta Praktik";

// Waktu sekarang
$waktu = date("Y-m-d H:i:s");

// Salam dinamis
$jam = date("H");
if ($jam >= 5 && $jam < 12) {
    $salam = "Selamat Pagi";
} elseif ($jam >= 12 && $jam < 18) {
    $salam = "Selamat Siang";
} elseif ($jam >= 18 && $jam < 21) {
    $salam = "Selamat Sore";
} else {
    $salam = "Selamat Malam";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website PHP di Hugging Face</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9fafc; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 50px auto; text-align: center; }
        .box { background: #e3f2fd; padding: 20px; border-radius: 12px; margin-top: 20px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        h1 { color: #1976d2; }
        input[type="text"] { padding: 8px; border: 1px solid #ccc; border-radius: 6px; width: 60%; }
        button { padding: 8px 16px; border: none; border-radius: 6px; background: #1976d2; color: white; cursor: pointer; margin-left: 5px; }
        button:hover { background: #0d47a1; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Website PHP punya Wenny</h1>
        <p><strong><?= $salam ?></strong>, <span style="color:#d32f2f;"><?= htmlspecialchars($nama) ?></span> 👋</p>
        
        <form method="POST" action="">
            <input type="text" name="nama" placeholder="Masukkan nama Anda" value="<?= htmlspecialchars($nama) ?>">
            <button type="submit">Kirim</button>
        </form>

        <div class="box">
            <p>⏰ Waktu server sekarang: <code><?= $waktu ?></code></p>
            <p>✅ Dijalankan di <strong>Docker</strong> di Hugging Face Spaces</p>
        </div>
    </div>
</body>
</html>
