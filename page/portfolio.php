<div class="wrap">
    <h1 class="text-center">Наши разработки</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php
                    $data = mysqli('SELECT * FROM `services`');
                    $mysql = mysqli('SELECT * FROM `portfolio` JOIN `services` WHERE services.id = portfolio.id_id_services');

                    foreach ($data as $item) {
                        $id = $item['id'];
                        ?>
                        <a class="nav-link <?php echo $item['active']; ?>" id="btn-<?php echo $id; ?>-tab"
                           data-toggle="pill" href="#btn-<?php echo $id; ?>" role="tab"
                           aria-controls="btn-<?php echo $id; ?>"
                           aria-selected="<?php echo $item['aria-selected']; ?>"><?php echo $item['title']; ?></a>
                        <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-10">
                <div class="row tab-content" id="v-pills-tabContent">
                    <?php
                    foreach ($mysql as $item) {
                        $id = $item['id'];
                        if ($id == $item['id_id_services']) {

                            ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <a href="<?php echo $item['link']; ?>" target="_blank" id="btn-<?php echo $id; ?>"
                                   role="tabpanel"
                                   aria-labelledby="btn-<?php echo $id; ?>-tab"
                                   class="card border animation-bs text-white tab-pane show fade <?php echo $item['active']; ?>">
                                    <img class="card-img" src="<?php echo $item['images']; ?>" alt="Card image">
                                    <div class="card-img-overlay">
                                        <h5 class="h3 card-title text-center bold"><?php echo $item['title_portfolio']; ?></h5>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>