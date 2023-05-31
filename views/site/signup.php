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

