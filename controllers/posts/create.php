<?php

require "Validator.php";

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    if(!Validator::string($_POST["content"], max: 50)){
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