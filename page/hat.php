<h1 class="text-center">Форум</h1>
<div class="container">
    <div id="ajaxAnsw"></div>
    <form method="post" class="comment-form">
        <input type="hidden" name="forum" value="forum">
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
        <div class="captcha_wrapper">
            <div class="g-recaptcha" data-sitekey="6LfnLc4UAAAAAHUoWosf_p7wr3d9AAQHE79pIxyS"></div>
        </div>
    </form>
    <button class="btn btn-pink btn-lg" name="submit" type="submit" style="margin-top: 15px;" id="ajaxComm">Отправить</button>
    <form action="" style="margin-top: 30px;">
        <select class="form-control btn-primary" data-style="" >
            <option value="">Старые</option>
            <option value="">Новые</option>
        </select>

    </form>
    <?php
    $sql = mysqli("SELECT * FROM `hat` WHERE `parent_id` IS NULL");
    foreach ($sql as $item) {
        ?>
        <div class="block border">
            <div class="block_head">
                <div class="row">
                    <div class="col">
                        <p><i class="fas fa-user-circle fa-2x"></i><i
                                    class="head-text"><?php echo $item['name']; ?></i></p>
                    </div>
                    <div class="col">
                        <div class="float-right">
                            <p><i class="fas fa-clock fa-2x"></i><b
                                        class="head-text bold"><?php echo $item['date']; ?></b>
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="float-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="fas fa-share fa-2x" data-toggle="modal"
                                    data-target="#exampleModal<?php echo $item['id']; ?> ">
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $item['id']; ?>" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ответить на сообщение</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form method="post" class="comment-form">
                                                <div class="form-group">
                                                    <label for="validationServer01"
                                                           class="col-form-label-lg">Имя</label>
                                                    <input type="text"
                                                           class="form-control-lg form-control name animation-bs border"
                                                           id="validationServer01"
                                                           placeholder="Имя" name="name">
                                                    <div id="ansName"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
                                                    <textarea
                                                            class="form-control message form-control-lg animation-bs border"
                                                            id="exampleFormControlTextarea1"
                                                            name="message"
                                                            rows="3"></textarea>
                                                    <div id="ansMessage"></div>
                                                </div>
                                            </form>
                                            <button class="btn btn-pink btn-lg" name="submit" type="submit"
                                                    id="ajaxComm">
                                                Отправить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_container border-top border-bottom">
                <div class="content">
                    <p class="text"><?php echo $item['sms']; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="block border" style="margin-left: 40px;">
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
                        <!-- Button trigger modal -->
                        <button type="button" class="fas fa-share fa-2x" data-toggle="modal"
                                data-target="#exampleModal">
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ответить на сообщение</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <form method="post" class="comment-form">
                                            <div class="form-group">
                                                <label for="validationServer01"
                                                       class="col-form-label-lg">Имя</label>
                                                <input type="text"
                                                       class="form-control-lg form-control name animation-bs border"
                                                       id="validationServer01"
                                                       placeholder="Имя" name="name">
                                                <div id="ansName"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
                                                <textarea
                                                        class="form-control message form-control-lg animation-bs border"
                                                        id="exampleFormControlTextarea1"
                                                        name="message"
                                                        rows="3"></textarea>
                                                <div id="ansMessage"></div>
                                            </div>
                                        </form>
                                        <button class="btn btn-pink btn-lg" name="submit" type="submit"
                                                id="ajaxComm">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <nav aria-label="Page navigation example" style="
    margin-top: 50px;">
        <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item disabled">
                <span class="page-link"><i class="fas fa-angle-double-left"></i></span>
            </li>
            <li class="page-item disabled">
                <span class="page-link"><i class="fas fa-angle-left"></i></span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
            </li>
            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
            </li>
        </ul>
    </nav>
</div>
<?php
