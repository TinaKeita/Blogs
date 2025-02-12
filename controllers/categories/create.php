
 <?php

require "Validator.php";

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    if(!Validator::string($_POST["category_name"],min:3 ,max: 25)){
        $errors["category_name"] = "Ievadiet atbilstošu Kategotijas nosaukumu! 🙏";
    }
    elseif(empty($errors)){
        $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
        $params = ["category_name" => $_POST["category_name"]];
        $posts = $db->query($sql, $params)->fetchAll();
        header("Location: /categories/index"); 
        exit();
    }
}
$pageTitle = "Kategorijas izveido!";
require "views/categories/create.view.php";
