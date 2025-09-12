<?php
class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama  = $nama;
        $this->harga = $harga;
        $this->stok  = $stok;
    }

    public function tampilkanInfo() {
        return " Nama   : {$this->nama} <br>" .
               " Harga  : Rp " . number_format($this->harga, 0, ',', '.') . "<br>" .
               " Stok   : {$this->stok} <br>";
    }

    public function beliProduk($jumlah) {
        if ($jumlah > $this->stok) {
            return " Stok tidak mencukupi untuk membeli $jumlah unit.<br>";
        } else {
            $this->stok -= $jumlah;
            $total = $this->harga * $jumlah;
            return " Berhasil membeli $jumlah unit {$this->nama}.<br>" .
                   " Total Harga    : Rp " . number_format($total, 0, ',', '.') . "<br>" .
                   " Sisa Stok      : {$this->stok}<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2 - Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #8360c3;
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
            width: 400px;
        }
        input {
            padding: 10px;
            width: 80%;
            margin: 10px 0;
            border-radius: 8px;
            border: none;
            outline: none;
        }
        input[type="submit"] {
            padding: 12px 25px;
            background: #4caf50;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background: #388e3c;
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
            background: #e3b750ff;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1> Latihan 2 - Produk</h1>

        <form method="post">
            <input type="text" name="nama" placeholder="Nama Produk" required><br>
            <input type="number" name="harga" placeholder="Harga Produk" required><br>
            <input type="number" name="stok" placeholder="Stok Produk" required><br>
            <input type="number" name="jumlah" placeholder="Jumlah Beli" required><br>
            <input type="submit" value="Beli Produk">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama   = $_POST["nama"];
            $harga  = $_POST["harga"];
            $stok   = $_POST["stok"];
            $jumlah = $_POST["jumlah"];

            $produk = new Produk($nama, $harga, $stok);

            echo "<div class='result'>";
            echo "<h3> Informasi Produk:</h3>";
            echo $produk->tampilkanInfo();
            echo "<h3>🛍 Proses Pembelian:</h3>";
            echo $produk->beliProduk($jumlah);
            echo "</div>";
        }
        ?>

        <a href="beranda1.php">⬅ Kembali ke halaman praktikum 1</a>
        <a href="../home.php">⬅ Kembali ke Home</a>
    </div>
</body>
</html>