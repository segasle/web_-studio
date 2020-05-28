
<p class="h5 text-center">Наши услуги</p>
<div class="swiper-container" data-mobile="false">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
        $data = mysqli('SELECT * FROM `services`');
        $mysql = mysqli('SELECT * FROM `services_description` JOIN `services` WHERE services.id = services_description.id_description ');

        //$des .= '';
        foreach ($data as $item) {
            $id = $item['id'];
            $des = '';
            $price = '';

            foreach ($mysql as $items) {
                if ($id == $items['id_description']) {
                    $des .= '<li>' . $items['description'] . '</li>';
                    $number = number_format($items['price'], 0, '', ' ');
                    $price .= '<li>от ' . $number . ' р</li>';
                }
            }
            ?>
            <div class="swiper-slide">
                <div class="block border relative" style="min-height: 358px;">
                    <div class="block_head">
                        <div class="head">
                            <p class="text-center bold">
                                <?php echo $item['title']; ?></p>
                        </div>
                    </div>
                    <div class="block_content">
                        <ul>
                            <?php echo $des; ?>
                        </ul>
                        <div class="icon">
                            <div class="d-flex justify-content-end">
                                <i class="<?php echo $item['img']; ?> fa-4x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="block_price">
                        <div class="block_head">
                            <div class="head">
                                <p class="text-center bold">
                                    <?php echo $item['title']; ?></p>
                            </div>
                        </div>
                        <div class="block_content">
                            <ul>
                                <?php echo $price; ?>
                            </ul>
                            <div class="icon">
                                <div class="d-flex justify-content-end">
                                    <i class="fas fa-coins fa-4x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev d-lg-none"><i class="fas fa-chevron-left fa-2x"></i></div>
    <div class="swiper-button-next d-lg-none"><i class="fas fa-chevron-right fa-2x"></i></div>

</div>