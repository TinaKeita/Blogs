<?php
require "functions.php"; //savienojamies ar citiem failiem
require "Database.php";
$config = require("config.php");

echo "Iet<br>
<style>
    body {
      background-color:D7D3BF;
      font-size: 20px;
      font-family: Consolas;
    }

</style>";

$db = new Database($config["database"]); //jauna klase kas savieno ar datu bāzi
// Pie new Database izpildās konstrukotrs
$posts = $db->query("SELECT * FROM posts")->fetchAll(); //metode atgriež asoc masīvu ar datiem

//dd($posts[0] ["content"]); - izsauc dump and die

echo "<ul>";
    foreach ($posts as $post) {
       echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";

?>