<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>
<body>
    
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

</body>
</html>
