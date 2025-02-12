<?php $style2 = "css/kop_stils.css"?>
<?php $pageTitle = "Izveido kategoriju";?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2>Izveido kategoriju!</h2>
<form method="POST">
    <label><input name="category_name" value="<?=$_POST['category_name'] ?? '' ?>"/></label> 
    <button>Saglābt</button>

<?php if(isset($errors["category_name"])) { ?>
       <p><?= $errors["category_name"] ?></p>
<?php } ?>


</form>

<!-- php tagu count - 5 -->
<?php require "views/components/footer.php"?>