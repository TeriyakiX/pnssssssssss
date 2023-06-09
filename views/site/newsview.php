
<div class="news_place">
        <div class="news_detail">
            <h2>Описание: <?= $news->discription?></h2>
            <h2>Основаная часть: <?= $news->title?></h2>
            <a href="<?= app()->route->getUrl('/newsUpdate') ?>?id=<?= $newss->id ?>">
                Редактирование новсти
            </a>

            <a href="<?= app()->route->getUrl('/news') ?>">Хорошо</a>
        </div>
    <div class="news_img">
        <img src="/lab3/public/assets/img/ <?= $news->photo?>" alt="">
    </div>

</div>