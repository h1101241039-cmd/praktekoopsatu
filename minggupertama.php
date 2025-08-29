<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

$mhs1 = new Mahasiswa("Budi Santoso", "220101001", "Sistem Informasi");
$mhs2 = new Mahasiswa("Ani Lestari", "220101002", "Teknik Informatika");

echo $mhs1->tampilData();
echo "<br>";
echo $mhs2->tampilData();

