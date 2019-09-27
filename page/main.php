<div class="row">
    <div class="col-12 col-sm-12 col-md-6">
        <h1 class="text-center">У нас нет преград</h1>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <!--<?php  feedback();?>-->
        <form method="post" enctype="multipart/form-data" class="ask-form">
            <p class="h2">Оставьте заявку</p>
            <div id="ajaxAnsw"></div>
            <div class="form-row">
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer01" class="col-form-label-lg">Имя</label>
                    <input type="text" class="form-control-lg form-control name" id="validationServer01" placeholder="Имя" name="name">
                    <div id="ansName"></div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02" class="col-form-label-lg">Телефон</label>
                    <input type="text" class="form-control phone-number form-control-lg" placeholder="+7(999)999-99-99"
                           name="phone" id="validationServer02">
                    <!--<div class="valid-feedback">
                        Looks good!
                    </div>-->
                    <div id="ansPhone"></div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02" class="col-form-label-lg">Email</label>
                    <input type="email" class="form-control form-control-lg email" placeholder="sega@ya.ru" name="email"
                           id="validationServer02">
                    <div id="ansEmail"></div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1" class="col-form-label-lg">Тема</label>
                <input type="text" class="form-control form-control-lg topic" id="exampleInputPassword1" name="topic" placeholder="Тема">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
                <textarea class="form-control message" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1" class="col-form-label-lg">Файл</label>
                <input type="file" class="form-control-file form-control-lg" name="file" style="padding: 0;" id="exampleFormControlFile1">
            </div>
            <button class="btn btn-pink btn-lg" name="submit" type="submit" id="ajaxBut">Отправить</button>
        </form>
    </div>
</div>