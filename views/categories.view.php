<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
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
    <ul>

</body>
</html>