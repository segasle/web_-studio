<?php
if (isset($_POST['submit'])){
    $data = $_POST;
    $name = trim($data['name']);
    $phone = $data['phone'];
    $topic = $data['topic'];
    $message = $data['message'];
    $file = $_FILES['file'];
    $email = trim($data['email']);
    if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $name)){
        echo '<div class="invalid-feedback">
                Введите имя
        </div>';
    }else{
        echo '    <div class="valid-feedback">
                       Поле заполнено
                    </div>';
    }
    if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone") or !preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email") ){
        echo '<div class="invalid-feedback">
                Введите номер телефона или почту
        </div>';
    }else{
    echo '    <div class="valid-feedback">
                       Поле заполнено
                    </div>';
}

}