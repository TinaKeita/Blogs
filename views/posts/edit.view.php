<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>
<?php $pageTitle = "Rediģē";?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 

<h2>Labo ierakstu!</h2>
<form method="POST">
    <input name="content" value="<?=$post['content'] ?? '' ?>"/>
    <input name="id" type="hidden" value="<?=$post['id']?>"/>
    <button>Saglābt</button>

<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
<?php } ?>


</form>

<?php require "views/components/footer.php"?>
