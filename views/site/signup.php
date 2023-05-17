<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/lab3/public/css/style.css">
    <title>pnssss</title>
</head>
<main>
<div class="login">
    <form class="forml" method="post" enctype="multipart/form-data">
        <div class="back_log">
            <div class="log">
                <h2>Регистрация</h2>
            </div>
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <label class="inreg" > <input type="text" name="name" placeholder="Имя"></label>
            <label class="inreg" > <input type="text" name="login" placeholder="Логин"></label>
            <label class="inreg" > <input type="password" name="password" placeholder="Пароль"></label>
            <label class="inreg" > <input type="text" name="phone_number" placeholder="Номер телефона"></label>
            <label class="inreg" > <input type="text" name="adress" placeholder="Адресс"></label>
            <button class="but_log">Зарегистрироваться</button>
        </div>
    </form>
</div>
</main>

