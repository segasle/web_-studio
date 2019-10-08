<div class="wrap">
    <h1 class="text-center">Контакты</h1>
    <div class="container">
        <p class="h3 bold">Руководитель</p>
        <?php
            $sql = mysqli('SELECT * FROM `contacts`');
            $array = mysqli_fetch_array($sql);
            //print_r($array);

        ?>
        <p><b class="h5 bold">ФИО:</b><i><?php echo $array['fio']; ?></i></p>

    </div>
</div>
