<?php
$select = "SELECT * FROM categories"; 
$params = [];
$categories = $db->query($select, $params)->fetchAll();

$pageTitle = "Kategorijas";
require "views/categories/index.view.php";