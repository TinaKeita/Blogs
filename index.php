<?php
require "functions.php";

echo "Iet<br>
<style>
body {
    background-color:D7D3BF;
    font-size: 20px;}

</style>
        ";
// 1. Izveidot datu bazi ar tabulu✅
// 2. Savienot PHP ar datu bāzi
// 3. Izvadit datus ka HTML

// db nosaukums, parole, lietotajvards
// mysql_ connect❌

// Data Source Name
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

// PDO -PHP Data Object
$pdo = new PDO($dsn);

// 1. sagatavot vaicājumu (statement)
$statement = $pdo->prepare("SELECT * FROM posts");
// 2.Izpildit statement
$statement->execute();
// 3. Dabut rezultatu
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts[0] ["content"]);

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";

?>