<?php $style = "css/cat_style.css"?>
<?php $style2 = "css/kop_stils.css"?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>
<h2>Kategorijas</h2>

    <form>
        <input name='search_query' />
        <button>Meklēt</button>
    </form>

    <?php if(count($categories) == 0 ){ ?>
        <p>Nekas netika atrasts!</p>
    <?php } ?>

    <ul>
        <?php foreach ($categories as $categorie) { ?>
            <li> <?= $categorie["category_name"] ?> </li>
        <?php } ?>
    </ul>

    <?php require "views/components/footer.php"?>