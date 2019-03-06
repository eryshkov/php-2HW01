<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <title>Site</title>
</head>
<body>
<div class="container">
    <div class="row" id="menu">
        <div class="col">
            <a href="/" class="btn btn-outline-primary">Новости</a>
            <a href="/tests/" class="btn btn-outline-primary">Тесты</a>
        </div>
    </div>
    <?php
    foreach ($articles as $article) {
        ?>
        <div class="row">
            <div class="col">
                <h6><a href="/article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></h6>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>