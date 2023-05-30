<link rel="stylesheet" href="/lab3/public/css/subvision.css">
<div class="sub">
    <div class="sub_all">
        <div class="sub_obj">
            <h2>Описание: <?= $news->discription?></h2>
            <h2>Основаная часть: <?= $news->title?></h2>
            <h2>Изображение новсти: <?= $news->img?></h2>
            <a href="<?= app()->route->getUrl('/news') ?>">Хорошо</a>
        </div>
    </div>
</div>