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
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <label class="inlogn" ><input type="text" name="login" placeholder="Логин"></label>
            <label class="inlogn" ><input type="password" name="password" placeholder="Пароль"></label>
            <button class="but_log" >Авторизоваться</button>
            </div>
        </form>
    </div>
<?php endif;
