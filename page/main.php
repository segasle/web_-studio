<div class="row">
    <div class="col-12 col-sm-12 col-md-6"></div>
    <div class="col-12 col-sm-12 col-md-6">
        <?php include 'functions/form.php';?>
        <form method="post" enctype="multipart/form-data">
            <p class="h2">Оставьте заявку</p>
            <div class="form-row">
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer01">Имя</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Имя"
                           name="name"
                           required="required">

                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02">Телефон</label>
                    <input type="text" class="form-control phone-number is-valid" placeholder="+7(999)999-99-99"
                           name="phone" id="validationServer02">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02">Email</label>
                    <input type="email" class="form-control is-valid" placeholder="sega@ya.ru" name="email"
                           id="validationServer02">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Тема</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="topiс" placeholder="Тема">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Сообщение</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Файл</label>
                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
            </div>
            <button class="btn btn-pink" name="submit" type="submit">Отправить</button>
        </form>
    </div>
</div>