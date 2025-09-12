<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($j, $p, $t) {
        $this->judul = $j;
        $this->penulis = $p;
        $this->tahun = $t;
    }
}

class Perpustakaan {
    public $daftar_buku = array();

    public function tambahBuku($buku) {
        $this->daftar_buku[] = $buku;
    }

    public function tampilkanBuku() {
        if (empty($this->daftar_buku)) {
            echo "<p>Tidak ada buku di perpustakaan.</p>";
        } else {
            echo "<div class='result'>";
            echo "<h3>Daftar Buku:</h3>";
            echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse; width:100%;'>";
            echo "<tr style='background:#4caf50; color:white;'>
                    <th>No</th><th>Judul</th><th>Penulis</th><th>Tahun</th>
                  </tr>";
            foreach ($this->daftar_buku as $i => $buku) {
                echo "<tr>
                        <td>".($i+1)."</td>
                        <td>{$buku->judul}</td>
                        <td>{$buku->penulis}</td>
                        <td>{$buku->tahun}</td>
                      </tr>";
            }
            echo "</table>";
            echo "</div>";
        }
    }
}

// Buat objek perpustakaan
session_start();
if (!isset($_SESSION["perpus"])) {
    $_SESSION["perpus"] = serialize(new Perpustakaan());
}
$perpus = unserialize($_SESSION["perpus"]);

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun = $_POST["tahun"];

    $buku = new Buku($judul, $penulis, $tahun);
    $perpus->tambahBuku($buku);
    $_SESSION["perpus"] = serialize($perpus); // Simpan ke session
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #267f53;
            text-align: center;
            padding: 50px;
            color: white;
        }
        .card {
            background: rgba(0,0,0,0.6);
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            width: 600px;
        }
        input[type="text"], input[type="number"] {
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
            background: white;
            color: black;
            padding: 15px;
            border-radius: 10px;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 8px;
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
        <h1> Manajemen Perpustakaan</h1>

        <!-- Form Input Buku -->
        <form method="post">
            <input type="text" name="judul" placeholder="Masukkan Judul Buku" required><br>
            <input type="text" name="penulis" placeholder="Masukkan Penulis" required><br>
            <input type="number" name="tahun" placeholder="Masukkan Tahun Terbit" required><br>
            <input type="submit" value="Tambah Buku">
        </form>

        <?php
            $perpus->tampilkanBuku();
        ?>

        <a href="?reset=1"> Reset Data</a>
    </div>

    <?php
    // Reset data perpustakaan
    if (isset($_GET["reset"])) {
        session_destroy();
        header("Location: ".$_SERVER['PHP_SELF']);
    }
    ?>
</body>
</html>
