<link rel="stylesheet" href="/lab3/public/css/subvision.css">
<div class="sub">
    <div class="sub_all">
                <div class="sub_obj">
                    <h2>Адресс: <?= $room->adress?></h2>
                    <h2>Площадь:<?= $room->phone_number?></h2>
                    <h2>Пользователь:<?= $room->user?></h2>
                    <h2>Лицо:<?= $room->role_userr?></h2>
                    <a href="<?= app()->route->getUrl('/Subdivisions') ?>">Хорошо</a>
                </div>
    </div>
</div>