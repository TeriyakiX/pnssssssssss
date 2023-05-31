
    <div class="sub">
        <div class="sub_all">
            <?php
            foreach ($room as $book) {
            ?>
                <?php
                        ?>
                            <div class="sub_obj">
                                <a href="<?= app()->route->getUrl('/roomView') ?>?id=<?= $book->id ?>"><?= $book->user?></a>

                            </div>
                    <?php
                ?>
                <?php
            }
            ?>
        </div>
    </div>