<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/lab3/public/css/style.css">
    <title>lab3-4</title>
</head>
<body>
<header>
    <nav class="nav">
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <a href="<?= app()->route->getUrl('/news') ?>">Новости</a>
        <a href="<?= app()->route->getUrl('/Subdivisions') ?>">Адресная книжкка</a>
        <?php
        if (!app()->auth::check()):?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php else: ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <form  method="get" action="<?= app()->route->getUrl('/searchdb') ?>"  id="searchform">
                <input type="text" name="search">
                <input class="search" type="submit" name="submit" value="Search">
            </form>
        <?php endif; ?>

        <?php if (!app()->auth::checkrole()):?>
            <a href="<?= app()->route->getUrl('/addAdressBook') ?>">Добавление пользователя в адресную книгу</a>
            <a href="<?= app()->route->getUrl('/newsCreate') ?>">Добавление новости</a>
        <?php endif; ?>
    </nav>
</header>
<main>
    <img class="img_main" style="width: 100%; height: 91%" src="https://i.gifer.com/xK.gif" alt="" >
    <?= $content ?? '' ?>
</main>
</body>
</html>