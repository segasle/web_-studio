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
            <textarea class="form-control-lg form-control message animation-bs border"
                      id="exampleFormControlTextarea1"
                      name="message"
                      rows="3"></textarea>
            <div id="ansMessage"></div>
        </div>
        <div class="captcha_wrapper">
            <div class="g-recaptcha" data-sitekey="6LfnLc4UAAAAAHUoWosf_p7wr3d9AAQHE79pIxyS"></div>
        </div>
    </form>
    <button class="btn btn-pink btn-lg" name="submit" type="submit" style="margin-top: 15px;" id="ajaxComm">Отправить
    </button>
    <?php
    $current_sort = $_GET['sort'];
    $_GET['sort'] = 'asc';
    $url_asc = strtok($_SERVER['REQUEST_URI'], '?') . '?' . http_build_query($_GET);
    $_GET['sort'] = 'desc';
    $url_desc = strtok($_SERVER['REQUEST_URI'], '?') . '?' . http_build_query($_GET);
    $_GET['sort'] = $current_sort;
    ?>
    <form action="" style="margin-top: 15px;">
        <select class="form-control btn-primary" data-style="" onchange="window.location.href=this.value">
            <option <?php echo 'value="' . $url_asc . '"';
            if ($_GET['sort'] == 'asc') echo 'selected'; ?> >Старые
            </option>
            <option <?php echo 'value="' . $url_desc . '"';
            if ($_GET['sort'] == 'desc') echo 'selected'; ?> >Новые
            </option>
        </select>
    </form>
    <?php
    if ($_GET['sort'] == 'desc') {
        $sql = mysqli("SELECT * FROM `hat` WHERE `parent_id` IS NULL ORDER BY date DESC");
    } else {
        $sql = mysqli("SELECT * FROM `hat` WHERE `parent_id` IS NULL");
    }
    $r_count = 0;
    $number = 0;
    foreach ($sql as $item) {
        $date = new DateTime($item['date']);
        $r_count++;
        $number++;
        $ans_count = 0;
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
                                        class="head-text bold"><?php echo $date->format('d.m.Y H:i:s'); ?></b>
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
                            <div class="modal fade modal-forum" id="exampleModal<?php echo $item['id']; ?>"
                                 tabindex="-1" role="dialog"
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
                                            <div id="ajaxAnsw<?php echo $item['id']; ?>"></div>
                                            <form method="post" class="mform<?php echo $item['id']; ?>">
                                                <input type="hidden" name="forum" value="forum">
                                                <input type="hidden" name="parent_id"
                                                       value="<?php echo $item['id']; ?>">
                                                <div class="form-group">
                                                    <label for="validationServer<?php echo $item['id']; ?>"
                                                           class="col-form-label-lg">Имя</label>
                                                    <input type="text"
                                                           class="form-control-lg form-control name name<?php echo $item['id']; ?> animation-bs border"
                                                           id="validationServer<?php echo $item['id']; ?>"
                                                           placeholder="Имя" name="name">
                                                    <div id="ansName<?php echo $item['id']; ?>"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea<?php echo $item['id']; ?>"
                                                           class="col-form-label-lg">Сообщение</label>
                                                    <textarea
                                                            class="form-control-lg form-control message message<?php echo $item['id']; ?> animation-bs border"
                                                            id="exampleFormControlTextarea<?php echo $item['id']; ?>"
                                                            name="message"
                                                            rows="3"></textarea>
                                                    <div id="ansMessage<?php echo $item['id']; ?>"></div>
                                                </div>
                                                <div class="captcha_wrapper">
                                                    <div class="g-recaptcha"
                                                         data-sitekey="6LfnLc4UAAAAAHUoWosf_p7wr3d9AAQHE79pIxyS"></div>
                                                </div>
                                            </form>
                                            <button class="btn btn-pink btn-lg" name="submit" type="submit"
                                                    id="ajaxModalComm" data-formid="<?php echo $item['id']; ?>"
                                                    onclick="ajaxModalComm(<?php echo $item['id']; ?>, <?php echo $r_count; ?>)">
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
        if ($item['child']) {
            $childsql = mysqli("SELECT * FROM `hat` WHERE `parent_id`={$item['id']}");
            foreach ($childsql as $childitem) {
                $date = new DateTime($childitem['date']);
                $r_count++;
                $ans_count++;
                if ($ans_count == 4) {
                    echo '<div class="text-right mt-2 anslist' . $number . '"><a style="cursor:pointer;" onclick=showAnswer(' . $number . ')>подробнее</a></div>';
                }
                ?>
                <div class="block border <?php echo 'num' . $number;
                if ($ans_count > 3) echo ' d-none'; ?>" style="margin-left:40px;">
                    <div class="block_head">
                        <div class="row">
                            <div class="col">
                                <p><i class="fas fa-user-circle fa-2x"></i><i
                                            class="head-text"></i><?php echo $childitem['name']; ?></p>
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <p><i class="fas fa-clock fa-2x"></i><b
                                                class="head-text bold"><?php echo $date->format('d.m.Y H:i:s'); ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="fas fa-share fa-2x" data-toggle="modal"
                                            data-target="#exampleModal<?php echo $childitem['id']; ?>">
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade modal-forum" id="exampleModal<?php echo $childitem['id']; ?>"
                                         tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ответить на
                                                        сообщение</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="ajaxAnsw<?php echo $childitem['id']; ?>"></div>
                                                    <form method="post" class="mform<?php echo $childitem['id']; ?>">
                                                        <input type="hidden" name="forum" value="forum">
                                                        <input type="hidden" name="parent_id"
                                                               value="<?php echo $childitem['id']; ?>">
                                                        <div class="form-group">
                                                            <label for="validationServer<?php echo $childitem['id']; ?>"
                                                                   class="col-form-label-lg">Имя</label>
                                                            <input type="text"
                                                                   class="form-control-lg form-control name animation-bs border"
                                                                   id="validationServer<?php echo $childitem['id']; ?>"
                                                                   placeholder="Имя" name="name">
                                                            <div id="ansName<?php echo $childitem['id']; ?>"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea<?php echo $childitem['id']; ?>"
                                                                   class="col-form-label-lg">Сообщение</label>
                                                            <textarea
                                                                    class="form-control message form-control-lg animation-bs border"
                                                                    id="exampleFormControlTextarea<?php echo $childitem['id']; ?>"
                                                                    name="message"
                                                                    rows="3"></textarea>
                                                            <div id="ansMessage<?php echo $childitem['id']; ?>"></div>
                                                        </div>
                                                        <div class="captcha_wrapper">
                                                            <div class="g-recaptcha"
                                                                 data-sitekey="6LfnLc4UAAAAAHUoWosf_p7wr3d9AAQHE79pIxyS"></div>
                                                        </div>
                                                    </form>
                                                    <button class="btn btn-pink btn-lg" name="submit" type="submit"
                                                            id="ajaxModalComm" data-formid="<?php echo $item['id']; ?>"
                                                            onclick="ajaxModalComm(<?php echo $childitem['id']; ?>, <?php echo $r_count; ?>)">
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
                            <p class="text"><?php echo $childitem['sms']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
                if ($childitem['child']) {
                    $child2sql = mysqli("SELECT * FROM `hat` WHERE `parent_id`={$childitem['id']}");
                    foreach ($child2sql as $child2item) {
                        $date = new DateTime($child2item['date']);
                        $r_count++;
                        $ans_count++;
                        if ($ans_count == 4) {
                            echo '<div class="text-right mt-2 anslist' . $number . '"><a style="cursor:pointer;" onclick=showAnswer(' . $number . ')>подробнее</a></div>';
                        }
                        ?>
                        <div class="block border <?php echo 'num' . $number;
                        if ($ans_count > 3) echo 'd-none'; ?>" style="margin-left:80px;">
                            <div class="block_head">
                                <div class="row">
                                    <div class="col">
                                        <p><i class="fas fa-user-circle fa-2x"></i><i
                                                    class="head-text"></i><?php echo $child2item['name']; ?></p>
                                    </div>
                                    <div class="col">
                                        <div class="float-right">
                                            <p><i class="fas fa-clock fa-2x"></i><b
                                                        class="head-text bold"><?php echo $date->format('d.m.Y H:i:s'); ?></b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                            </div>
                            <div class="block_container border-top border-bottom">
                                <div class="content">
                                    <p class="text"><?php echo $child2item['sms']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
        }
    }
    ?>

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
