<?php
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

function connecting()
{
    $file = '';
    if (empty($_GET['page'])) {
        $file = 'main';
    } else {
        $file = $_GET['page'];
    }
//    echo '<pre>';
//    print_r($_SERVER);
//    echo '</pre>';

    include 'template/header.php';
    include 'page/' . $file . '.php';
    include 'template/footer.php';
}

function mysqli($query)
{
    global $mysqli;
    $result = mysqli_query($mysqli, $query);
    return $result;
}

function feedback()
{
    if (isset($_POST['submit'])) {
        $data = $_POST;
        $name = trim($data['name']);
        $phone = $data['phone'];
        $topic = $data['topic'];
        $message = $data['message'];
        $file = $_FILES['file'];
        $email = trim($data['email']);
        $errors = array();;
        if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $name)) {
            $errors[] = 'Введите имя';
        }
        if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone") or !preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email")) {
            $errors[] = 'введите номер телефона или почту';
        }

        if (empty($errors)) {
            if (empty(trim($topic))) {
                $topic = 0;
            }
            if (empty(trim($message))) {
                $message = 0;
            }
            if (!isset($file)) {
                $res = mysqli("INSERT INTO `feedback`(`name`, `phone`, `email`, `topic`, `message`) VALUES ('{$name}','{$phone}','{$email}','{$topic}','{$message}')");
                if ($res) {
                    echo 'отправлено';
                }
            } else {
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
//                                $nameto = 'Имя:' . $name . "<br>";
//                                $phoneto = 'Номер:' . $phone . "<br>";
//                                $emailto = 'Почта:' . $email . "<br>";
//                                $txtto = 'Сообщение:' . $data['content'] . "<br>";
//                                $mess = $nameto . $phoneto . $emailto . $txtto;
                                    $wer = mysqli("INSERT INTO `feedback` (`email`, `name`, `phone`, `message`, `file`, `topic`) VALUES ('{$email}','{$name}','{$phone}','{$message}','{$file}','{$topic}')");
                                    if (!empty($wer)) {
//                                    $to = 'jim-owner@yandex.ru';
//                                    $subject = 'обратная связь';
//                                    $message = "$mess";
//                                    $headers = 'From: segasle@kafe-lyi.ru' . "\r\n" .
//                                        'Reply-To: segasle@kafe-lyi.ru' . "\r\n" .
//                                        "Content-Type: text/html; charset=\"UTF-8\"\r\n"
//                                        . 'X-Mailer: PHP/' . phpversion();
//                                    $mail = mail("$to", "$subject", "$message", "$headers");
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
        } else {
            echo '<div class="errors">' . array_shift($errors) . '</div>';
        }
    }
}

function ajax_form($form_data)
{
    /*if($_FILES['file']['size'] > 0) {
        return 100;
    } else {
        return 200;
    }*/
    // КОДЫ ОШИБОК ДЛЯ AJAX
    // 0 - неизвестная ошибка
    // 1 - все ОК
    // 2 - не введено имя
    // 3 - не введен телефон или почта
    // 4 - ошибка записи в БД
    // 23 - имя и телефон с email
    // 5 - большой файл
    // 6 - неправильный формат файла
    // 7 - ошибка файла
    $data = $form_data;
    $name = trim($data['name']);
    $phone = $data['phone'];
    $email = trim($data['email']);
    if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $name)) {
        if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone") and !preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email")) {
            return 23;
        } else {
            return 2;
        }
    } else {
        if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone") and !preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email")) {
            return 3;
        } else {
            if (empty($data['topic'])) {
                $topic = 0;
            } else {
                $topic = $data['topic'];
            }
            if (empty($data['message'])) {
                $message = 0;
            } else {
                $message = $data['message'];
            }
            if ($_FILES['file']['size'] > 0) {
                $update = $_SERVER['DOCUMENT_ROOT'] . '/download/';
                $file = $_FILES['file']['name'];
                $update_file = $update . $file;
                if (!file_exists($update_file)) {
                    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                        if ($_FILES['file']['size'] > 1024 * 3 * 1024) {
                            return 5;
                        } else {
                            $ext = pathinfo($update_file, PATHINFO_EXTENSION);
                            $allow = array('jpeg', 'jpg', 'png', 'xlsx', 'docx');
                            if (in_array($ext, $allow)) {
                                if (move_uploaded_file($_FILES['file']['tmp_name'], $update_file)) {
                                    $res = mysqli("INSERT INTO `feedback`(`name`, `phone`, `email`, `topic`, `message`, `file`) VALUES ('{$name}','{$phone}','{$email}','{$topic}','{$message}', '{$file}')");
                                    if ($res) {
                                        return 1;
                                    } else {
                                        return 4;
                                    }
                                } else {
                                    return 7;
                                }
                            } else {
                                return 6;
                            }
                        }
                    } else {
                        return 7;
                    }
                } else {
                    return 7;
                }
            } else {
                $res = mysqli("INSERT INTO `feedback`(`name`, `phone`, `email`, `topic`, `message`) VALUES ('{$name}','{$phone}','{$email}','{$topic}','{$message}')");
                if ($res) {
                    return 1;
                } else {
                    return 4;
                }
            }
        }
    }
    return 0;
}