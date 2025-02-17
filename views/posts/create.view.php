<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>
<?php $pageTitle = "Izveido";?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2>Izveido bloga ierakstu!</h2>
<form method="POST">
    <label><input name="content" value="<?=$_POST['content'] ?? '' ?>"/></label>
    
<select name="category_id" class="options">
    <?php foreach ($categories as $category) { ?> 

        <option value = "<?= $category["id"] ?>">
        <?= $category["category_name"] ?>
        </option>
    
    <?php } ?>
</select>
    
    <button class="search">Saglābt</button>

<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
<?php } ?>


</form>

<!-- php tagu count - 5 -->
<?php require "views/components/footer.php"?>