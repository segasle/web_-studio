<div class="wrap">
    <div class="container-fluid">
        <h1 class="text-center">Наши отзывы</h1>
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <p class="h2">Оставьте отзыв</p>
                <div id="ajaxAnsw"></div>
                <form method="post" class="comment-form">
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
            </div>

            <div class="col-12 col-md-6">

                <?php
                $sql = mysqli('SELECT * FROM `comments` WHERE `publish`= 1');
                if (mysqli_fetch_row($sql) > 0) { ?>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="8000" data-keyboard="true" data-wrap="true">
                        <div class="carousel-inner">
                            <?php
                            foreach ($sql as $item) {
//                                echo '<pre style="color: white;">';
//                                print_r($item);
//                                echo '</pre>';

                                if ($item['mac'] == 'active'){
                                    $active = 'active';
                                }else{
                                    $active = '';
                                }
                                $date = new DateTime($item['date']);
                                ?>
                                <div class="carousel-item <?php echo $active; ?>">
                                    <div class="block border">
                                        <div class="block_head">
                                            <div class="row">
                                                <div class="col">
                                                    <p><i class="fas fa-user-circle fa-2x"></i><i class="head-text"><?php echo $item['name']; ?></i></p>
                                                </div>
                                                <div class="col">
                                                    <div class="float-right">
                                                        <p><i class="fas fa-clock fa-2x"></i><b class="head-text bold"><?php echo $date->format('d.m.Y H:i:s'); ?></b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_container border-top border-bottom">
                                            <div class="content">
                                                <p class="text"><?php echo $item['text']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <?php
                } else {
                    echo '<p class="h2">нет отзывов</p>';
                }
                ?>

            </div>
        </div>
    </div>
</div>