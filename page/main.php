<div class="wrap">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
            <h1 class="text-center">У нас нет преград</h1>
            <div class="block_text">
                <p class="text h4 text-justify
}">Мы - команда профессиональных WEB-разработчиков, создаем новое, улучшаем старое.</p>
            </div>
            <h2 class="text-center" style="margin-bottom: 15px; margin-top: 15px;">Команда</h2>
            <div class="row">

                <?php
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



        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <?php include 'template/form.php'; ?>
        </div>
    </div>
</div>