<div class="login">
    <form class="forml" method="post" enctype="multipart/form-data">
        <div class="back_log">
            <div class="log">
                <h2>Редактирование новости</h2>
            </div>
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <label class="inreg" > <input type="text" name="discription" placeholder="Описание"></label>
            <label class="inreg" > <input type="text" name="title" placeholder="Текст"></label>
            <input id="photo" name="photo" type="file">
            <button class="but_log">Обновить новость</button>
        </div>
    </form>
</div>