<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/lab3/public/css/subvision.css">
    <title>pnssss</title>
</head>

<main>
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



</main>
<footer>
    <div class="fot_back">
        <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer>