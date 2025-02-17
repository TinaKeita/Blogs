<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>
<h2>Kategorijas</h2>

    <?php if(count($categories) == 0 ){ ?>
        <p>Nekas netika atrasts!</p>
    <?php } ?>

    <ul>
        <?php foreach ($categories as $categorie) { ?>
            <li> <?= $categorie["category_name"] ?> </li>
        <?php } ?>
    </ul>

    <?php require "views/components/footer.php"?>