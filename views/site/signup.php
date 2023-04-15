<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pnssssssssss/public/style.css">
    <title>pnssss</title>
</head>
<main>
<h3><?= $message ?? ''; ?></h3>
<div class="login">
    <form class="forml" method="post">
        <div class="back_log">
            <div class="log">
                <h2>Регистрация</h2>
            </div>
            <label class="inreg" > <input type="text" name="name" placeholder="Имя"></label>
            <label class="inreg" > <input type="text" name="login" placeholder="Логин"></label>
            <label class="inreg" > <input type="password" name="password" placeholder="Пароль"></label>
            <button class="but_log">Зарегистрироваться</button>
        </div>
    </form>
</div>
</main>
<footer>
    <div class="fot_back">
        <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer>
