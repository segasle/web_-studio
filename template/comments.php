
<div class="comments">
    <div class="container">
        <div class="comments-wrapper">
            <p class="h5 text-center">Отзывы</p>
            <div class="comments-slide">

                <?php
                $sql = mysqli('SELECT * FROM `comments` WHERE `publish`= 1');

                foreach ($sql as $item) {
                    $date = new DateTime($item['date']);
                    ?>
                    <div class="slide-item">
                        <div class="comments-block rounded">
                            <div class="d-flex align-items-start">
                                <div class="quote d-none d-md-block">
                                    <div class="quote-top">
                                        <i class="fas fa-quote-right fa-4x fa-flip-horizontal"></i>
                                    </div>
                                </div>
                                <div class="comments-images rounded-circle">
                                    <img src="/images/<?php echo $item['sex']?>.png" class="images" alt="">

                                </div>
                                <div class="comments-content">
                                    <div class="comments_head">
                                        <div class="d-flex justify-content-md-between justify-content-start">
                                            <div class="head-name">
                                                <p  class="head-text h4"><i><?php echo $item['name']; ?></i></p>
                                            </div>
                                            <div class="head-date d-none d-md-block">
                                                <p class="head-text h4"><time datetime="<?php echo $item['date']; ?>"><?php echo $date->format('d.m.Y H:i:s'); ?></time>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments_body">
                                        <div class="content">
                                            <p class="text"><?php echo $item['text']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="quote d-md-flex justify-content-end d-none">
                                <div class="quote-bottom">

                                    <i class="fas fa-quote-right fa-4x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                } ?>

            </div>
        </div>
    </div>
</div>