<div class="login">
    <form class="forml" method="post" enctype="multipart/form-data">
        <div class="back_log">
            <div class="log">
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <h2>Удаление новости</h2>
            </div>
            <button class="but_log">Удалить новость</button>
        </div>
    </form>
</div>