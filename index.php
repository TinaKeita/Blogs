<?php

echo "Iet";
// 1. Izveidot datu bazi ar tabulu✅
// 2. Savienot PHP ar datu bāzi

// db nosaukums, parole, lietotajvards
// mysql_ connect❌

// Data Source Name
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

// PDO -PHP Data Object
$pdo = new PDO($dsn);
?>