<?php

if(isset($_POST["id"])) {
    $sql = "DELETE FROM categories WHERE id = :id;";
    $params = ["id" => $_POST["id"]];
    $posts = $db->query($sql, $params)->fetchAll();


    $sql = "UPDATE posts SET category_id = 0 WHERE category_id = :id;";
    $params = ["id" => $_POST["id"]];
    $post = $db->query($sql, $params)->fetchAll();

    header("Location: /categories/index"); 
    exit();
} else{
    redirectIfNotFound();
}
require "views/categories/create.view.php";