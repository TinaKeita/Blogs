<?php
require "Validator.php";

if(isset($_GET["id"])){
    $sql = "SELECT * FROM categories WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}
   
   
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors = []; 
    
        if(!Validator::string($_POST["category_name"], max: 50)){
            $errors["category_name"] = "Dzēšana nav labošana! Ieraksti labojumu!";
        }
        elseif(empty($errors)){
            $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id;";
            $params = ["id" => $_POST["id"], "category_name" => $_POST["category_name"]];
            $post = $db->query($sql, $params)->fetch();
            header("Location: /categories/show?id=" . $_POST["id"]); 
            exit();
        }      
        
    }
    require "views/categories/edit.view.php";