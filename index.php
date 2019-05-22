<?php include_once "../controllers/Product.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork7</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    <script src="js/jquery.js"></script>
    <script src="js/my.js"></script>
</head>
<body>
<div class="container">
    <? include"../template/header.php"; ?>
    <div class="leftblock">
        <?php include "..template/menu.php"; ?>
    </div>
    <div class="contant">
        <h1>Store for computer</h1>
        <p class="hello">Добро пожаловать в интернет-магазин</p>
        <?
        if (isset($goods)) {
            foreach ($goods as $good) {?>
                <div class="item">
                    <a href="item.php?id=<?=$good[id]?>"><img src="<?=$good[small_src]?>" alt="<?=$good[name]?>" title="<?=$good[name]?>"></a>
                    <h3 class="item-name"><a href="item.php?id=<?=$good[id]?>"><?=$good[name]?></a></h3>
                    <p class="price"><?=$good[price]?>p.</p>
                    <p class="add-to-basket"><a href="#" onclick="item(<?=$good[id]?>" title="Добавить в корзину">Buy</a></p>
                </div>
            <?}
        }
        ?>
    </div>
    <footer>
        <? include "..template/footer.php"; ?>
    </footer>
</div>
</body>
</html>