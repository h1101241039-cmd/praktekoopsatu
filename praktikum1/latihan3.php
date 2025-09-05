<?php
class User {
    public $username;
    public $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login($username, $password) {
        if ($username === $this->username && $password === $this->password) {
            return "✅ Login berhasil! Selamat datang, <b>{$this->username}</b>.";
        } else {
            return "❌ Login gagal! Username atau password salah.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3 - Mini Project Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff512f, #dd2476);
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
        <h1>🔐 Latihan 3 - Login</h1>

        <form method="post">
            <input type="text" name="username" placeholder="Masukkan Username" required><br>
            <input type="password" name="password" placeholder="Masukkan Password" required><br>
            <input type="submit" value="Login">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputUser = $_POST["username"];
            $inputPass = $_POST["password"];

            // Dummy data
            $dummy = new User("admin", "12345");

            echo "<div class='result'>";
            echo "<h3>Hasil Login:</h3>";
            echo $dummy->login($inputUser, $inputPass);
            echo "</div>";
        }
        ?>

        <a href="beranda1.php">⬅ Kembali ke halaman praktikum 1</a>
        <a href="../home.php">⬅ Kembali ke Home</a>
    </div>
</body>
</html>
