<h1 class="text-center">Форум</h1>
<div class="container">                <form method="post" class="comment-form">
        <div class="form-group">
            <label for="validationServer01" class="col-form-label-lg">Имя</label>
            <input type="text" class="form-control-lg form-control name animation-bs border"
                   id="validationServer01"
                   placeholder="Имя" name="name">
            <div id="ansName"></div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
            <textarea class="form-control message form-control-lg animation-bs border"
                      id="exampleFormControlTextarea1"
                      name="message"
                      rows="3"></textarea>
            <div id="ansMessage"></div>
        </div>
    </form>
    <button class="btn btn-pink btn-lg" name="submit" type="submit" id="ajaxComm">Отправить</button>
    <div class="block border">
        <div class="block_head">
            <div class="row">
                <div class="col">
                    <p><i class="fas fa-user-circle fa-2x"></i><i
                                class="head-text"></i></p>
                </div>
                <div class="col">
                    <div class="float-right">
                        <p><i class="fas fa-clock fa-2x"></i><b
                                    class="head-text bold"></b>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="float-right">
                        <i class="fas fa-share fa-2x" title="Ответить" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="block_container border-top border-bottom">
            <div class="content">
                <p class="text"></p>
            </div>
        </div>
    </div>
</div>
<?php
