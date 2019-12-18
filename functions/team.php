<div class="row">

    <?php
    require 'bd.php';
    require 'function.php';
    $sql = mysqli('SELECT * FROM `team`');
    foreach ($sql as $item) {
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="card">
                <img src="/images/team/<?php echo $item['img'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="text-center h2"><?php echo $item['name'];?></p>
                    <p class="text-center"><?php echo $item['desolations'];?></p>
                </div>
            </div>
        </div>
        <?php

    }
    ?>
</div>

