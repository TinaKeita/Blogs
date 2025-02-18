<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>
<?php $pageTitle = "Rediģē";?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 

<h2>Labo ierakstu!</h2>
<form method="POST">
<input name="content" value="<?=$post['content'] ?? '' ?>"/>
    <select name="category_id" class="options">
    <option value="0">Bez kategorijas</option>
        <?php foreach ($categories as $category) { ?> 

            <option value = "<?= $category["id"] ?>">
            <?= $category["category_name"] ?>
            </option>
    
        <?php } ?>
    </select>
<input name="id" type="hidden" value="<?=$post['id']?>"/>
<button class="search">Saglābt</button>

<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
<?php } ?>


</form>

<?php require "views/components/footer.php"?>
