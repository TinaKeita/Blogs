<?php  

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = 'DELETE FROM comments
    WHERE id = :id;';
    $params = ["id" => $_POST["id"]];
    $post = $db->query($sql, $params)->fetch();

    header();
    exit();
} else {
    redirectIfNotFound();
}
?>