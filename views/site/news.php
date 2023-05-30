<div class="sub">
    <div class="sub_all">
        <h1>Список новостей</h1>
        <?php foreach ($news as $newss): ?>
            <div class="sub_obj">
                <a href="<?= app()->route->getUrl('/news-view') ?>?id=<?= $newss->id ?>">
                    <?= $newss->discription ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
