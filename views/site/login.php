<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pnssssssssss/public/style.css">
    <title>pnssss</title>
</head>
<main>
    <div class="login">
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
        <form class="forml" method="post">
            <div class="back_log">
                <div class="log">
                    <h2>Авторизация</h2>
                </div>
            <label class="inlogn" ><input type="text" name="login" placeholder="Логин"></label>
            <label class="inlogn" ><input type="password" name="password" placeholder="Пароль"></label>
            <button class="but_log" >Авторизоваться</button>
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="fot_back">
    <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer>
<?php endif;
