<?php
class Segitiga {
    private $alas;
    private $tinggi;
    private $sisi1;
    private $sisi2;
    private $sisi3;

    public function __construct($a, $t, $s1, $s2, $s3) {
        $this->alas = $a;
        $this->tinggi = $t;
        $this->sisi1 = $s1;
        $this->sisi2 = $s2;
        $this->sisi3 = $s3;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungKeliling() {
        return $this->sisi1 + $this->sisi2 + $this->sisi3;
    }

    public function cekJenis() {
        if ($this->sisi1 == $this->sisi2 && $this->sisi2 == $this->sisi3) {
            return "Sama Sisi";
        } elseif ($this->sisi1 == $this->sisi2 || $this->sisi2 == $this->sisi3 || $this->sisi1 == $this->sisi3) {
            return "Sama Kaki";
        } else {
            return "Sembarang";
        }
    }

    public function tampilkanInfo() {
        echo "===== INFORMASI SEGITIGA =====<br>";
        echo "Alas     : " . $this->alas . "<br>";
        echo "Tinggi   : " . $this->tinggi . "<br>";
        echo "Sisi     : {$this->sisi1}, {$this->sisi2}, {$this->sisi3}<br>";
        echo "Luas     : " . $this->hitungLuas() . "<br>";
        echo "Keliling : " . $this->hitungKeliling() . "<br>";
        echo "Jenis    : " . $this->cekJenis() . "<br>";
        echo "===============================<br><br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>praktikum 2 - segitiga</title>
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
        <h1>Analisa segitiga</h1>

        <form method="post">
            <input type="number" name="sisi1" placeholder="sisi 1" required><br>
            <input type="number" name="sisi2" placeholder="sisi 2" required><br>
            <input type="number" name="sisi3" placeholder="sisi 3" required><br>
            <input type="submit" value="Beli Produk">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sisi1 = $_POST['sisi1'];
            $sisi2 = $_POST['sisi2'];
            $sisi3 = $_POST['sisi3'];

            // Cek validitas segitiga
            if ($sisi1 + $sisi2 > $sisi3 && $sisi1 + $sisi3 > $sisi2 && $sisi2 + $sisi3 > $sisi1) {
                // Rumus Heron
                $s = ($sisi1 + $sisi2 + $sisi3) / 2;
                $luas = sqrt($s * ($s - $sisi1) * ($s - $sisi2) * ($s - $sisi3));

                // Anggap sisi1 sebagai alas
                $alas = $sisi1;
                $tinggi = (2 * $luas) / $alas;

                $segitiga = new Segitiga($alas, $tinggi, $sisi1, $sisi2, $sisi3);

                echo '<div class="result">';
                $segitiga->tampilkanInfo();
                echo '</div>';
            } else {
                echo '<div class="result">⚠️ Bukan segitiga valid!</div>';
            }
        }
        ?>

        <a href="beranda1.php">⬅ Kembali ke halaman praktikum 1</a>
        <a href="../home.php">⬅ Kembali ke Home</a>
    </div>
</body>
</html>
