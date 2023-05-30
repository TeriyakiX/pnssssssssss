<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/lab3/public/style.css">
    <title></title>
</head>
<main>
    <div class="login">
        <form class="forml" method="post">
            <div class="back_log">
                <div class="log">
                    <h2>Добавить пользователя в адресную книжку</h2>
                </div>
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <label class="inreg" > <input type="text" name="adress" placeholder="Адресс"></label>
                <label class="inreg" > <input type="text" name="phone_number" placeholder="Номер телефона"></label>
                <label class="inreg" > <input type="text" name="user" placeholder="Пользователь"></label>
                <button class="but_log">Добавить</button>
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="fot_back">
        <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer>
