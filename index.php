<?php
require "functions.php"; //savienojamies ar citiem failiem
require "Database.php";
$config = require("config.php");

echo "
<style>
    body {
      background-color:D7D3BF;
      font-size: 20px;
      font-family: Consolas;
    }

</style>";

//Mērķis: uztaisīt filtru - ierakstu meklēšana
//HTML forma, input un submit.
//Kaut kā uzrakstīt PHP
//Atgriezt datus no SQL

$db = new Database($config["database"]); //jauna klase kas savieno ar datu bāzi
// Pie new Database izpildās konstrukotrs
$posts = $db->query("SELECT * FROM posts")->fetchAll(); //metode atgriež asoc masīvu ar datiem

//dd($posts[0] ["content"]); - izsauc dump and die


if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  echo "Atgriezt ierakstus";
  //TODO atrodi īstos ierakstus
  $posts = $db->query("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';")->fetchAll();
}
echo "<h2>Blogs</h2>";

echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>"; //search bars
echo "</form>";

echo "<ul>";
    foreach ($posts as $post) {
       echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";

?>