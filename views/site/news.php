<div class="news_obj">
        <h1>Список новостей</h1>

        <?php foreach ($news as $newss): ?>
            <div class="news">
                <a href="<?= app()->route->getUrl('/news-view') ?>?id=<?= $newss->id ?>">
                    <?= $newss->discription ?>
                </a>
            </div>
        <?php endforeach; ?>
</div>
