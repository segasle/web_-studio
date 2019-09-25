<div class="row">
    <div class="col-12 col-sm-12 col-md-6"></div>
    <div class="col-12 col-sm-12 col-md-6">
        <form method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer01">Имя</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Имя"
                           required="required">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02">Телефон</label>
                    <input type="text" class="form-control phone-number is-valid" placeholder="+7(999)999-99-99" id="validationServer02"
                           required="required">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer02">Email</label>
                    <input type="email" class="form-control is-valid" placeholder="sega@ya.ru" id="validationServer02"
                           required="required">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Тема</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Тема">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button class="btn btn-pink" type="submit">Отправить</button>
        </form>
    </div>
</div>