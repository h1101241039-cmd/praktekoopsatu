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
        <h1>Ini halaman praktikum 1</h1>
        <h2>mau kemana</h2>
        <a href="latihan1.php">Latihan 1 > Menghitung luas dan keliling persegi panjang </a>
        <a href="latihan2.php">Latihan 2 > Menghitung luas dan keliling persegi panjang </a>
        <a href="latihan3.php">Latihan 3 > Menghitung luas dan keliling persegi panjang </a>

    </div>
</body>
</html>
