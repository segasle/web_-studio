<div class="wrap">
    <p class="text-center h5">Наши разработки</p>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <aside class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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

                </aside>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="row tab-content" id="v-pills-tabContent">
                    <?php
                    foreach ($data as $items) {
                        foreach ($mysql as $item) {
                            $id = $items['id'];
                            if ($id == $item['id_id_services']) {

                                ?>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <a href="<?php echo $item['link']; ?>" target="_blank" id="btn-<?php echo $id; ?>"
                                       role="tabpanel"
                                       aria-labelledby="btn-<?php echo $id; ?>-tab"
                                       class="card tab-pane show fade mb-3 <?php echo $item['active']; ?>">
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
        </div>
    </div>
</div>
