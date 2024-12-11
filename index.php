<?php
require "functions.php"; //savienojamies ar citiem failiem
require "Database.php";

echo "Iet<br>
<style>
    body {
      background-color:D7D3BF;
      font-size: 20px;}

</style>";

// 1. Izveidot datu bazi ar tabulu ✅
// 2. Savienot PHP ar datu bāzi ✅
// 3. Izvadit datus ka HTML ✅

// db nosaukums, parole, lietotajvards
// mysql_ connect❌

$db = new Database(); //jauna klase kas savieno ar datu bāzi
$posts = $db->query("SELECT * FROM posts"); //metode atgriež asoc masīvu ar datiem

//dd($posts[0] ["content"]);

echo "<ul>";
    foreach ($posts as $post) {
       echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";

?>