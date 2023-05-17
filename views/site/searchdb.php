<link rel="stylesheet" href="/lab3/public/css/subvision.css">
<div class="sub">
            <p>
            <div class="sub">
                <div class="sub_all">
                    <?php
                    foreach ($room as $book) {
                        ?>
                            <div class="sub_obj">
                                <a href="<?= app()->route->getUrl('/roomView') ?>?id=<?= $book->id ?>"><?= $book->phone_number?></a>

                            </div>
                        <?php
                    }
                    ?>
        </div>
    </div>
</div>