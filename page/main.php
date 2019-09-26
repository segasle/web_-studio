<div class="row">
    <div class="col-12 col-sm-12 col-md-6"></div>
    <div class="col-12 col-sm-12 col-md-6">
        <?php  feedback();?>
        <form method="post" enctype="multipart/form-data">
            <p class="h2">Оставьте заявку</p>
            <div class="form-row">
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer01" class="col-form-label-lg">Имя</label>
                    <input type="text" class=" form-control-lg form-control is-valid" id="validationServer01" placeholder="Имя"
                           name="name">

                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02" class="col-form-label-lg">Телефон</label>
                    <input type="text" class="form-control phone-number  form-control-lg is-valid" placeholder="+7(999)999-99-99"
                           name="phone" id="validationServer02">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02" class="col-form-label-lg">Email</label>
                    <input type="email" class="form-control is-valid  form-control-lg" placeholder="sega@ya.ru" name="email"
                           id="validationServer02">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1" class="col-form-label-lg">Тема</label>
                <input type="text" class="form-control  form-control-lg" id="exampleInputPassword1" name="topiс" placeholder="Тема">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1" class="col-form-label-lg">Файл</label>
                <input type="file" class="form-control-file form-control-lg" name="file" style="padding: 0;" id="exampleFormControlFile1">
            </div>
            <button class="btn btn-pink btn-lg" name="submit" type="submit">Отправить</button>
        </form>
    </div>
</div>