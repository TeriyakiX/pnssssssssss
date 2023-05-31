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
