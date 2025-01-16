<?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$errors = [];

    if(!isset($_POST["content"]) == true || strlen($_POST["content"]) == 0 || strlen($_POST["content"]) > 50){
        $errors["content"] = "Ievadiet atbilstošu Bloga Iearkstu! 🙏";
    }
    elseif(empty($errors)){
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
        $posts = $db->query($sql, $params)->fetchAll();
        header("Location: /"); 
        exit();
    }
 

 

 }

$pageTitle = "Ievades lauks!";
require "views/posts/create.view.php";