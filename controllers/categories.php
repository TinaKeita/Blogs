<?php 

$select = "SELECT * FROM categories"; 
$params = [];

if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE category_name LIKE :categories;"; 
  $params = ["categories" => $search_query]; 
}

$categories = $db->query($select, $params)->fetchAll();

$pageTitle = "Kategorijas";
$style = "../css/cat_style.CSS";
require "views/categories.view.php";
?>