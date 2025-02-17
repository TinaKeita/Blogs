<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>
<?php $pageTitle = $post["content"];?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2><?= htmlspecialchars($post["content"]) ?></h2>
<p>Kategorija: <?= $post["category_name"] ?></p>

<a href="/edit?id=<?= $post["id"] ?> " class="button-link">Labot ierakstu</a>

<form method="POST" action="/delete">
    <input name="id" value="<?=$post['id']?>" type="hidden" />
    <input type="submit" value="Dzēst" class="button"/>
</form>

<!-- php tagu count - 5 -->
<?php require "views/components/footer.php"?>