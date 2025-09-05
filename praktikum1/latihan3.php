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

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Persegi Panjang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9966, #ff5e62);
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
        input[type="number"] {
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
            border: none;
            border-radius: 8px;
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
            background: #2196f3;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        a:hover {
            background: #1565c0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>📏 Hitung Persegi Panjang</h1>

        <form method="post">
            <input type="number" name="panjang" placeholder="Masukkan Panjang" required><br>
            <input type="number" name="lebar" placeholder="Masukkan Lebar" required><br>
            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $p = $_POST["panjang"];
            $l = $_POST["lebar"];

            $pp = new persegiPanjang($p, $l);

            echo "<div class='result'>";
            echo "<h3>Hasil Perhitungan:</h3>";
            echo "📌 Panjang: $p <br>";
            echo "📌 Lebar: $l <br>";
            echo "📐 Luas: " . $pp->hitungLuas() . "<br>";
            echo "📐 Keliling: " . $pp->hitungKeliling() . "<br>";
            echo "</div>";
        }
        ?>
        <a href="beranda1.php">⬅ Kembali ke halaman praktikum 1</a>
        <a href="home.php">⬅ Kembali ke Home</a>
    </div>

</body>
</html>
