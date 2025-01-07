<?php 
require "Database.php";
$config = require("config.php");
echo '<link rel="stylesheet" type="text/css" href="cat_style.css">';


$db = new Database($config["database"]);
$select = "SELECT * FROM categories"; 
$params = [];

if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE category_name LIKE :categories;"; 
  $params = ["categories" => $search_query]; 
}

$categories = $db->query($select, $params)->fetchAll();

echo "<h2>Kategorijas</h2>";

echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>"; //search bars
echo "</form>";

if(count($categories) == 0 ){
    echo "Nekas netika atrasts!";
}

echo "<ul>";
    foreach ($categories as $categorie) { 
       echo "<li>" . $categorie["category_name"] . "</li>";
    }
echo "</ul>";
?>