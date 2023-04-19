<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pnssssssssss/public/css/subvision.css">
    <title>pnssss</title>
</head>
<main>
    <select name="user_profile_color_1">
        <option value="1">Подразделения</option>
        <option value="2">Главный корпус</option>
        <option value="3">Второй корпус</option>
        <option value="4">Третий корупс</option>
    </select>
    <div class="sub">
        <div class="sub_all">
            <?php
            foreach ($room as $rooom) {
            ?>
                <?php
                    if ($rooom->type_sub == 1):
                        ?>
                            <div class="sub_obj">
                                <a href="<?= app()->route->getUrl('/roomView') ?>?id=<?= $rooom->id ?>"><?= $rooom->name?></a>

                            </div>
                    <?php
                    endif;
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