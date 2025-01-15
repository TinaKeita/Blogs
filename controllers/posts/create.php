<?php
 
 if ($_SERVER['REQUEST_METHOD'] == '$_POST'){
 $sql = "INSERT INTO posts (content) VALUES (:content)";
 $params = ["content" => $_POST["content"]];
 $posts = $db->query($sql, $params)->fetchAll();
 
 header("Location: /"); 
 exit();
 }

 $pageTitle = "Ievades lauks!";



require "views/posts/create.view.php";