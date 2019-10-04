<div class="wrap">
    <h1 class="text-center">Мы можем делать</h1>
    <div class="container">
        <div class="row">
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
                        $price .= '<tr><th>' . $items['description'] . '</th><th>от ' . $number . ' р</th></tr>';
                    }
                }
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="block border animation-bs">
                        <div class="block_head">
                            <div class="head b-flex">
                                <i class="<?php echo $item['img']; ?> fa-4x"></i>
                                <p class="h4 bold"><?php echo $item['title']; ?></p>
                            </div>
                        </div>
                        <div class="block_content">
                            <ul>
                                <?php echo $des; ?>
                            </ul>
                        </div>
                        <div class="block_footer">
                            <button type="button" class="btn btn-pink btn-block" data-toggle="modal"
                                    data-target="#<?php echo $item['id_btn'] . $id; ?>">
                                Узнать цену
                            </button>

                            <div class="modal fade" id="<?php echo $item['id_btn'] . $id; ?>" tabindex="-1"
                                 role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title h1"
                                               id="exampleModalLabel"><?php echo $item['title']; ?></p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                                                <thead>
                                                <tr>
                                                    <th>Услуга</th>
                                                    <th>Цена</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php echo $price; ?>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-pink" data-dismiss="modal">Закрыть
                                            </button>
                                        </div>
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
        <h2 class="text-center margin-50">Не нашли для себя нужную услугу?</h2>
        <?php include 'template/form.php'; ?>
    </div>
</div>
