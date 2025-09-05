<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul   = $judul;
        $this->penulis = $penulis;
        $this->tahun   = $tahun;
    }

    public function getInfo() {
        return "📖 <b>{$this->judul}</b> | ✍ {$this->penulis} | 📅 {$this->tahun}<br>";
    }
}

class Perpustakaan {
    public $daftarBuku = [];

    public function tambahBuku(Buku $buku) {
        $this->daftarBuku[] = $buku;
    }

    public function tampilkanBuku() {
        if (empty($this->daftarBuku)) {
            return "❌ Belum ada buku di perpustakaan.<br>";
        }
        $output = "";
        foreach ($this->daftarBuku as $b) {
            $output .= $b->getInfo();
        }
        return $output;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4 - Manajemen Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f296db;
            text-align: center;
            padding: 100px;
            color: white;
        }
        .card {
            background: rgba(0,0,0,0.6);
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            width: 500px;
        }
        .result {
            margin-top: 20px;
            text-align: left;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #fcca59;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        a:hover {
            background: #e3b750;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>📚 Latihan 4 - Manajemen Perpustakaan</h1>

        <?php
        // Buat objek perpustakaan
        $perpus = new Perpustakaan();

        // Tambahkan minimal 3 buku
        $b1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
        $b2 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980);
        $b3 = new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009);

        $perpus->tambahBuku($b1);
        $perpus->tambahBuku($b2);
        $perpus->tambahBuku($b3);

        // Tampilkan daftar buku
        echo "<div class='result'>";
        echo "<h3>Daftar Buku di Perpustakaan:</h3>";
        echo $perpus->tampilkanBuku();
        echo "</div>";
        ?>

        <a href="beranda1.php">⬅ Kembali ke halaman praktikum 1</a>
        <a href="../home.php">⬅ Kembali ke Home</a>
    </div>
</body>
</html>
