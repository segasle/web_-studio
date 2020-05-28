<div class="wrap">


    <?php include 'template/comments.php'; ?>
    <div class="container">

        <p class="h5 text-center">Оставьте отзыв</p>
        <div id="ajaxAnsw"></div>
        <form method="post" class="comment-form form">
            <div class="form-group">
                <label for="validationServer01" class="col-form-label-lg">Имя</label>
                <input type="text" class="form-control-lg form-control name"
                       id="validationServer01"
                       placeholder="Имя" name="name">
                <div id="ansName"></div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
                <textarea class="form-control message form-control-lg"
                          id="exampleFormControlTextarea1"
                          name="message"
                          rows="3"></textarea>
                <div id="ansMessage"></div>
            </div>
        </form>
        <button class="btn btn-pink btn-lg" name="submit" type="submit" id="ajaxComm">Отправить</button>
            </div>
</div>