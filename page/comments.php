<div class="wrap">
    <div class="container-fluid">
        <h1 class="text-center">Наши отзывы</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="h2">Оставьте отзыв</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="validationServer01" class="col-form-label-lg">Имя</label>
                        <input type="text" class="form-control-lg form-control name animation-bs border"
                               id="validationServer01"
                               placeholder="Имя" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-form-label-lg">Сообщение</label>
                        <textarea class="form-control message form-control-lg animation-bs border"
                                  id="exampleFormControlTextarea1"
                                  name="message"
                                  rows="3"></textarea>
                    </div>
                </form>
                <button class="btn btn-pink btn-lg" name="submit" type="submit" id="ajaxBut">Отправить</button>

            </div>
            <div class="col-12 col-md-6">
                <?php
                    $sql = mysqli('SELECT * FROM `comments`');
                    if (mysqli_fetch_row($sql) > 0){
                        foreach ($sql as $item){
                ?>

                            <?php
                        }
                    }else{
                        echo '<p class="h2">нет отзывов</p>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>