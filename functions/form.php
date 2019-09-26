<?php
if (isset($_POST['submit'])) {
    $data = $_POST;
    $name = trim($data['name']);
    $phone = $data['phone'];
    $topic = $data['topic'];
    $message = $data['message'];
    $file = $_FILES['file'];
    $email = trim($data['email']);
    if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $name)) {
        echo '<div class="invalid-feedback">Введите имя</div>';
    } else {
        echo '<div class="valid-feedback">Поле заполнено</div>';
    }
    if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone") or !preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email")) {
        echo '<div class="invalid-feedback">Введите номер телефона или почту</div>';
    } else {
        echo '<div class="valid-feedback">Поле заполнено</div>';
    }
    if (!empty($name) and !empty($phone or $email)){
        if (empty(trim($topic))){
            $topic = 0;
        }
        if (empty(trim($message))){
            $message = 0;
        }
        if (!isset($file)){
            $res = mysqli("INSERT INTO `feedback`(`name`, `phone`, `email`, `topic`, `message`) VALUES ('{$name}','{$phone}','{$email}','{$topic}','{$message}')");
     if ($res){
         echo 'отправлено';
     }
        }else{

            $update = $_SERVER['DOCUMENT_ROOT'] . '/download/';
            $file = $_FILES['file']['name'];
            $update_file = $update . $file;
            if (!file_exists($update_file)) {
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                    if ($_FILES['file']['size'] > 1024 * 3 * 1024) {
                        echo '<div class="errors">Файл должен быть не больше 3 МБ</div>';
                    } else {
                        $ext = pathinfo($update_file, PATHINFO_EXTENSION);
                        $allow = array('jpeg', 'jpg', 'png', 'xlsx', 'docx');
                        if (in_array($ext, $allow)) {
                            if (move_uploaded_file($_FILES['file']['tmp_name'], $update_file)) {
                                $nameto = 'Имя:' . $name . "<br>";
                                $phoneto = 'Номер:' . $phone . "<br>";
                                $emailto = 'Почта:' . $email . "<br>";
                                $txtto = 'Сообщение:' . $data['content'] . "<br>";
                                $mess = $nameto . $phoneto . $emailto . $txtto;
                                $wer = mysqli("INSERT INTO `feedback` (`email`, `name`, `phone`, `text`, `dock`) VALUES ('{$email}','{$name}','{$phone}', '{$data['content']}','{$file}')");
                                if (!empty($wer)) {
                                    $to = 'jim-owner@yandex.ru';
                                    $subject = 'обратная связь';
                                    $message = "$mess";
                                    $headers = 'From: segasle@kafe-lyi.ru' . "\r\n" .
                                        'Reply-To: segasle@kafe-lyi.ru' . "\r\n" .
                                        "Content-Type: text/html; charset=\"UTF-8\"\r\n"
                                        . 'X-Mailer: PHP/' . phpversion();
                                    $mail = mail("$to", "$subject", "$message", "$headers");
                                    echo '<div class="go">Успешно подано</div>';
                                } else {
                                   // echo $mysqli->error;
                                }
                            }
                        }
                    }
        }
    }
}