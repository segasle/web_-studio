<p class="h5 text-center">Оставьте заявку</p>

<div class="row align-items-md-center">
    <div class="col-12 col-sm-12 col-md-8">
        <form method="post" enctype="multipart/form-data" class="ask-form form">
            <div class="form-row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="validationServer01" class="col-form-label-lg">Имя</label>
                        <input type="text" class="form-control-lg form-control name" id="validationServer01"
                               placeholder="Ваше имя" name="name">
                        <div id="ansName"></div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="validationServer02" class="col-form-label-lg">Телефон</label>
                        <input type="text" class="form-control phone-number form-control-lg"
                               placeholder="Телефон"
                               name="phone" id="validationServer02">
                        <div id="ansPhone"></div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="validationServer02" class="col-form-label-lg">Email</label>
                        <input type="email" class="form-control form-control-lg email" placeholder="Email"
                               name="email"
                               id="validationServer02">
                        <div id="ansEmail"></div>

                    </div>
                </div>
            </div>

            <?php
            $main = 'services';
            $page = $_GET['page'];
            if ($page !== $main) { ?>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="col-form-label-lg">Тема</label>
                    <input type="text" class="form-control form-control-lg topic" id="exampleInputPassword1"
                           name="topic" placeholder="Тема">
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
                <textarea class="form-control message form-control-lg" id="exampleFormControlTextarea1"
                          name="message"
                          rows="3" placeholder="Ваше сообщение"></textarea>
            </div>
            <?php if ($page !== $main) { ?>
                <div class="form-group">
                    <div id="ansFile"></div>
                    <input type="file" class="form-control-file form-control-lg form-file" data-multiple-caption="выбрано файлов: {count}" multiple="" name="file" id="exampleFormControlFile1">
                    <label for="exampleFormControlFile1" class="col-form-label-lg d-flex align-items-center">
                        <span class="btn btn-purple">Выбрать</span>
                        <span class="field__file-fake">Файл не выбран</span>
                    </label>

                </div>
            <?php } ?>
            <div class="d-flex align-items-center">

                <button class="btn btn-pink btn-sm" name="submit" type="submit" id="ajaxBut">Отправить</button>
                <div id="ajaxAnsw"></div>

            </div>
        </form>
    </div>

    <div class="d-md-block d-none col-md-4">
        <img src="/images/computer.png" class="w-100" alt="">
    </div>
</div>