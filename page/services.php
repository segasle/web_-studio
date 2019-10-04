<div class="wrap">
    <h1 class="text-center">Мы можем делать</h1>
    <div class="container">
        <div class="row">
            <?php
            $data = mysqli('SELECT * FROM `services`');
            $mysql = mysqli('SELECT * FROM `services_description` JOIN `services` WHERE services.id = services_description.id_description ');

            //$des .= '';
            foreach ($data as $item) {
                $id = $item['id'];
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="block animation-bs">
                        <div class="block_head">
                            <div class="head b-flex">
                                <i class="<?php echo $item['img']; ?> fa-4x"></i>
                                <p class="h4 bold"><?php echo $item['title']; ?></p>
                            </div>
                        </div>
                        <div class="block_content">
                            <ul>
                                <?php
                                foreach ($mysql as $items) {
                                    if ($id == $items['id_description']) {
                                        echo '<li>' . $items['description'] . '</li>';
                                    }
                                }
                                ?>
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
        <h2 class="text-center margin-50">Не нашли для себя нужную услугу?</h2>
        <?php include 'template/form.php';?>
    </div>
</div>
