<div class="news_obj">
        <h1>Список новостей</h1>

        <?php foreach ($news as $newss): ?>
            <div class="news">
                <a href="<?= app()->route->getUrl('/news-view') ?>?id=<?= $newss->id ?>">
                    <?= $newss->discription ?>
                </a>
                <a href="<?= app()->route->getUrl('/newsUpdate') ?>?id=<?= $newss->id ?>">
                    Редактирование новсти
                </a>
                <img class="img" src="/lab3/public/assets/img/<?=$newss->photo ?>" alt="">
            </div>
        <?php endforeach; ?>
</div>
