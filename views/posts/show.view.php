<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2><?= htmlspecialchars($post["content"]) ?></h2>
<a href="/edit?id=123<?= $post["id"] ?> ">Labot ierakstu</a>

<!-- php tagu count - 5 -->
<?php require "views/components/footer.php"?>