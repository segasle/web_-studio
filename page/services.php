<div class="wrap">
    <h1 class="text-center">Мы можем делать</h1>
    <div class="container">
        <div class="row">
            <?php
            $data = mysqli('SELECT * FROM `services`');
            $mysql = mysqli('SELECT * FROM `services_description` JOIN `services` WHERE services.id = services_description.id_description ');
            $des = '';
            foreach ($mysql as $item) {
                if ($item['id'] == $item['id_description']) {
                    $des .= '<li>' . $item['description'] . '</li>';
//
//                    echo '<pre style="color: white;">';
//                    print_r($item);
//                    echo '</pre>';
                }
            }
            $des .= '';
            foreach ($data as $item) {
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="block">
                        <div class="block_head">
                            <div class="head b-flex">
                                <i class="<?php echo $item['img']; ?> fa-4x"></i>
                                <p class="h4 bold"><?php echo $item['title']; ?></p>
                            </div>
                        </div>
                        <div class="block_content">
                            <ul>
                                <?php

                                echo $des; ?>
                            </ul>
                        </div>
                        <div class="block_footer">
                            <a href="" class="btn btn-pink btn-block">Цены</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
