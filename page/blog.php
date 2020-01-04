<h1 class="text-center">Наш блог</h1>
<div class="row">
    <?php
    $data = mysqli('SELECT * FROM `thumbnails`');
    foreach ($data as $item) {
        ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xll-2">
            <div class="card before">
                <img src="/images/thumbnails/<?php echo $item['photo'];?>" class="card-img-top" alt="<?php echo $item['head'];?>">
                <div class="card-body">
                    <h5 class="card-title h3"><?php echo $item['head'];?></h5>
                    <p class="card-text text-justify"><?php echo $item['descriptions'];?></p>
                    <a href="<?php echo $item['link'];?>" class="btn btn-md btn-pink btn-block">
                        <small class="">Подробнее</small>
                    </a>
                </div>
            </div>
        </div>
        <?php

    } ?>

</div>