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
    <title>Manajemen
