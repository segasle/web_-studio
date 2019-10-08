<div class="wrap">
    <h1 class="text-center">Контакты</h1>
    <div class="container">
        <p class="h3 bold">Руководитель</p>
        <?php
            $sql = mysqli('SELECT * FROM `contacts`');
            $array = mysqli_fetch_array($sql);
            //print_r($array);

        ?>
        <p><b class="h5 bold">ФИО:</b><i> <?php echo $array['fio']; ?></i></p>
        <p><b class="h5 bold">Email:</b><a href="mailto:<?php echo $array['email']; ?>"> <?php echo $array['email']; ?></a></p>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $array['phone']; ?>"
                   class="btn btn-md btn-pink btn-block"
                   target="_blank">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i><span>Написать в WhatsÂpp</span>
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <a href="viber://chat?number=<?php echo $array['phone']; ?>" class="btn btn-md btn-pink btn-block"
                   target="_blank">
                    <i class="fab fa-viber"></i><span>Написать в Viber</span>
                </a>
            </div>
        </div>
        <p class="h3 bold" style="margin-top: 20px;">Время работы</p>
        <div class="row align-items-center">
            <div class="col-3 col-sm-2">
                <ul>
                    <li class="btn-pink bold btn-lg">ПН</li>
                    <li class="btn-pink bold btn-lg">ВТ</li>
                    <li class="btn-pink bold btn-lg">СР</li>
                    <li class="btn-pink bold btn-lg">ЧТ</li>
                    <li class="btn-pink bold btn-lg">ПТ</li>
                    <li class="btn-pink bold btn-lg">СБ</li>
                    <li class="btn-pink bold btn-lg">ВС</li>
                </ul>
            </div>
            <div class="col-9 col-sm-10">
                <p class="h3">С 10 до 22</p>
            </div>
        </div>
    </div>
</div>
