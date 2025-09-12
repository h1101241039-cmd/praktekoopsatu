<?php
// Class Buku
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function __toString() {
        return "'{$this->judul}' oleh {$this->penulis} ({$this->tahun})";
    }
}

// Class Perpustakaan
class Perpustakaan {
    private $daftar_buku = array();

    public function tambahBuku($buku) {
        $this->daftar_buku[] = $buku;
    }

    public function getDaftarBuku() {
        return $this->daftar_buku;
    }
}

// Membuat objek perpustakaan
$perpus = new Perpustakaan();

// Tambahkan minimal 3 buku
$perpus->tambahBuku(new Buku("Laskar Pelangi", "Andrea Hirata", 2005));
$perpus->tambahBuku(new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980));
$perpus->tambahBuku(new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009));

// Ambil daftar buku
$daftarBuku = $perpus->getDaftarBuku();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 70%;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>
<body>

<h1>Daftar Buku di Perpustakaan</h1>

<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
    </tr>
    <?php foreach ($daftarBuku as $i => $buku): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= htmlspecialchars($buku->judul) ?></td>
            <td><?= htmlspecialchars($buku->penulis) ?></td>
            <td><?= htmlspecialchars($buku->tahun) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
