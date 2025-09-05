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
