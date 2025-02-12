<?php $style2 = "css/kop_stils.css"?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2>Kategorijas</h2>




    <?php if(count($posts) == 0 ){ ?>
        <p>No posts found!</p>
    <?php } ?>

    <ul> 
     <?php foreach ($posts as $post) { ?>
           <li><a href="show?id=<?= $post["id"] ?> "><?= $post["content"] ?></a></li> 
    <?php } ?>
     </ul>

<!-- php tagu count - 5 -->
<?php require "views/components/footer.php"?>