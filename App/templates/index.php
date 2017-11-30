<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/main.css" type="text/css">
</head>
<body>

<div id="container">

    <header><h1>Главные новости из Малых Васюков</h1></header>
    <nav>
        <p><a href="/">На главную</a></p>
        <a href="/App/templates/add.php">добавить новость</a>
    </nav>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <? foreach ($news as $article) { ?>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title"><?php echo $article->caption; ?></h4>
                                <p class="card-text"><?php echo $article->text; ?></p>
                                <h6 class="card-subtitle text-muted"><?php echo $article->author; ?></h6>
                                <a href="/App/templates/create.php?id=<?php echo $article->id; ?>" class="btn btn-primary">редактировать</a>
                                <a href="/App/index.php?id=<?php echo $article->id; ?>&op=del" class="btn btn-primary">удалить</a>
                                <a href="/App/templates/article.php?id=<?php echo $article->id; ?>" class="btn btn-primary">открыть новость</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>
</html>