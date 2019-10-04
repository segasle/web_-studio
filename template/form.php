<form method="post" enctype="multipart/form-data" class="ask-form">
    <p class="h2">Оставьте заявку</p>
    <div id="ajaxAnsw"></div>
    <div class="form-row">
        <div class="col-12 col-md-4 mb-3">
            <label for="validationServer01" class="col-form-label-lg">Имя</label>
            <input type="text" class="form-control-lg form-control name animation-bs border" id="validationServer01"
                   placeholder="Имя" name="name">
            <div id="ansName"></div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <label for="validationServer02" class="col-form-label-lg">Телефон</label>
            <input type="text" class="form-control phone-number form-control-lg animation-bs border"
                   placeholder="+7(999)999-99-99"
                   name="phone" id="validationServer02">
            <div id="ansPhone"></div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <label for="validationServer02" class="col-form-label-lg">Email</label>
            <input type="email" class="form-control form-control-lg email animation-bs" placeholder="sega@ya.ru"
                   name="email"
                   id="validationServer02">
            <div id="ansEmail"></div>
        </div>
    </div>

    <?php
    $main = 'main';
    $page = $_GET['page'];
    if ($page === $main or empty($page)) { ?>
        <div class="form-group">
            <label for="exampleInputPassword1" class="col-form-label-lg">Тема</label>
            <input type="text" class="form-control form-control-lg topic animation-bs border" id="exampleInputPassword1"
                   name="topic" placeholder="Тема">
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
        <textarea class="form-control message form-control-lg animation-bs border" id="exampleFormControlTextarea1" name="message"
                  rows="3"></textarea>
    </div>
    <?php if ($page === $main or empty($page)) { ?>
        <div class="form-group">
            <div id="ansFile"></div>
            <label for="exampleFormControlFile1" class="col-form-label-lg">Файл</label>
            <input type="file" class="form-control-file form-control-lg" name="file" style="padding: 0;"
                   id="exampleFormControlFile1">
        </div>
    <?php } ?>

    <button class="btn btn-pink btn-lg" name="submit" type="submit" id="ajaxBut">Отправить</button>
</form>
