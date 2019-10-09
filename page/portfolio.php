<div class="wrap">
    <h1 class="text-center">Наши разработки</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-1">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php
                    $data = mysqli('SELECT * FROM `services`');
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
            <div class="col-12 col-sm-12 col-md-8 col-lg-10 col-xl-11">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>