<?php 
require "Database.php";
$config = require("config.php");
echo '<link rel="stylesheet" type="text/css" href="css/cat_style.css">';


$db = new Database($config["database"]);
$select = "SELECT * FROM categories"; 
$params = [];

if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE category_name LIKE :categories;"; 
  $params = ["categories" => $search_query]; 
}

$categories = $db->query($select, $params)->fetchAll();

require "views/categories.view.php";
?>