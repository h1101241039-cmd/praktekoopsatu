
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
    require_once "latihan2.1.php";

    // Segitiga Sama Kaki
    $segitiga1 = new Segitiga(10, 8, 6, 8, 6);
    $segitiga1->tampilkanInfo();

    // Segitiga Sama Sisi
    $segitiga2 = new Segitiga(5, 4.33, 5, 5, 5);
    $segitiga2->tampilkanInfo();

    // Segitiga Sembarang
    $segitiga3 = new Segitiga(7, 6, 5, 6, 7);
    $segitiga3->tampilkanInfo();
    ?>
</body>
</html>