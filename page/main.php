<div class="wrap">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
            <h2 class="text-center" style="margin-bottom: 15px; margin-top: 15px;">Команда</h2>
            <div class="row">

                <?php
                $sql = mysqli('SELECT * FROM `team` ORDER BY id');
                foreach ($sql as $item) {
                    ?>
                    <div class="col-xll-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="card before">
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



        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <?php include 'template/form.php'; ?>
        </div>
    </div>
</div>