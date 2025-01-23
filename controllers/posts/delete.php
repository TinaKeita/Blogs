<?php

require "Validator.php";

if(!isset($_POST["id"])) {
    redirectIfNotFound();
}

    if(!Validator::string($_POST["id"])){
        $errors["content"] = "Dzēšana nav iespējama!";
    }
    elseif(empty($errors)){
        $params = ["id" => $_POST["id"]];
        $sql = "DELETE FROM posts WHERE id = :id;";
        $posts = $db->query($sql, $params)->fetchAll();
        
        
        header("Location: /"); 
        exit();
    }
 

$pageTitle = "Dzēšana!";
require "views/posts/create.view.php";