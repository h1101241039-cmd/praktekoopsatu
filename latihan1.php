<?php
class persegiPanjang {
    public $panjang;
    public $lebar;

    public function __construct($p, $l) {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>



<?php
// cara menggunakan class
// Buat class Produk dengan property nama, harga, stok. Buat method:
// tampilkanInfo()
// beliProduk($jumlah) → stok berkurang sesuai jumlah

class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanInfo() {
        return "Produk: $this->nama, Harga: Rp$this->harga, Stok: $this->stok";
    }

    public function beliProduk($jumlah) {
        if ($jumlah > $this->stok) {
            return "Stok tidak cukup!";
        } else {
            $this->stok -= $jumlah;
            return "Berhasil membeli $jumlah $this->nama. Sisa stok: $this->stok";
        }
    }
}






