<p class="text-center h5">Наш блог</p>
<div class="container">
    <div class="blog">

        <?php
        $data = mysqli('SELECT * FROM `thumbnails`');
        foreach ($data as $item) {
            if ($item['order'] == 0){
            ?>
                <section>
                    <article class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $item['head']; ?></h3>
                                    <p class="card-text text-justify"><?php echo $item['descriptions']; ?></p>
                                    <a href="<?php echo $item['link']; ?>" class="text-danger">
                                        <small class="">Подробнее</small>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <img src="/images/thumbnails/<?php echo $item['photo']; ?>" class="card-img-top"
                                     alt="<?php echo $item['head']; ?>"></div>
                        </div>
                    </article>
                </section>
            <?php

        }else{?>

                <article class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="/images/thumbnails/<?php echo $item['photo']; ?>" class="card-img-top"
                                 alt="<?php echo $item['head']; ?>"></div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $item['head']; ?></h3>
                                <p class="card-text text-justify"><?php echo $item['descriptions']; ?></p>
                                <a href="<?php echo $item['link']; ?>" class="text-danger">
                                    <small class="">Подробнее</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php

            }
        } ?>
    </div>
</div>