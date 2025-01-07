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

//Mērķis: drošība un kods īsāks

$db = new Database($config["database"]); //jauna klase kas savieno ar datu bāzi
//dd($posts[0] ["content"]); - dump and die - dumpo dd contentu browserī

$select = "SELECT * FROM posts"; 
$params = [];

if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  //ja kaut kas tiek meklēts tad secelct izpilda vaicājumu
  $select .= " WHERE content LIKE '%" . $_GET["search_query"] . "%'";
  $params
}

// Pie new Database izpildās konstrukotrs
$posts = $db->query($select, $params)->fetchAll();//metode atgriež asoc masīvu ar datiem

echo "<h2>Blogs</h2>";

echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>"; //search bars
echo "</form>";

//izvads
echo "<ul>";
    foreach ($posts as $post) { 
       echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";

?>