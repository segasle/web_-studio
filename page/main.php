<div class="wrap">
    <div class="container">
        <?php include 'template/price.php'; ?>

        <p class="h5 text-center">Портфолио</p>
        <div class="slide responsive">
            <?php
            $mysql = mysqli('SELECT * FROM `portfolio` JOIN `services` WHERE services.id = portfolio.id_id_services');

            foreach ($data as $items) {
                foreach ($mysql as $item) {
                    $id = $items['id'];
                    if ($id == $item['id_id_services']) {

                        ?>
                        <div class="">
                            <a href="<?php echo $item['link']; ?>" target="_blank" class="card">
                                <img class="card-img" src="<?php echo $item['images']; ?>" alt="Card image">
                            </a>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <p class="h5 text-center">Наша команда</p>
            <div class="slick">

                <?php
                $sql = mysqli('SELECT * FROM `team` ORDER BY id');
                foreach ($sql as $item) {
                    ?>
                    <div class="slick-item">
                        <div class="card w-100">
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <div class="card-img">
                                    <img src="/images/team/<?php echo $item['img']; ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="h4"><?php echo $item['name']; ?></p>
                                    <p class="desolation"><?php echo $item['desolations']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                }
                ?>
            </div>
        </div>
    </div>
    <?php include 'template/comments.php'; ?>

    <div class="container" id="request">
                <?php include 'template/form.php'; ?>

    </div>
</div>