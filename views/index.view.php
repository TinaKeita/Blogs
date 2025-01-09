<?php require "components/header.php"?>
<?php require "components/navbar.php"?> 
    
<h2>Blogs</h2>

    <form>
        <input name='search_query' placeholder='Atslēgasvārds..' value='<?= $_GET["search_query"] ?? "" ?>'/>
        <button>Meklēt</button>
    </form>

    <?php if(count($posts) == 0 ){ ?>
        <p>No posts found!</p>
    }
    <?php } ?>

    <ul> 
     <?php foreach ($posts as $post) { ?>
           <li> <?= $post["content"] ?></li> 
    <?php } ?>
    </ul>

<!-- php tagu count - 5 -->
<?php require "views/components/footer.php"?>
