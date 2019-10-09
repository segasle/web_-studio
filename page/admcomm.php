<?php
$user = "";
$pass = "";
if (isset($_POST['user']) && isset($_POST['pass'])) {
    if ($_POST['user'] == 'serj' && $_POST['pass'] == 'chj316Qs2') {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Администрирование отзывов</title>
            <style type="text/css">
                th, td {
                    padding: 5px 10px;
                }
            </style>
        </head>
        <body>
        <h1>Администрирование отзывов</h1>
        <table border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>MESSAGE</th>
                <th>DATE</th>
                <th>PUB</th>
                <th>ADMIN</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = mysqli('SELECT * FROM `comments`');
            foreach ($sql as $item) {
                ?>
                <tr id="<?php echo $item['id']; ?>">
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['text']; ?></td>
                    <td><?php echo $item['date']; ?></td>
                    <td style="text-align:center;" id="pub-<?php echo $item['id']; ?>">
                        <?php
                        if ($item['publish'] == 1) {
                            echo '<span style="color:green;">&#10003;</span>';
                        } else {
                            echo '<span style="color:red;">&#65794;</span>';
                        }
                        ?>
                    </td>
                    <td>
                        <form method="post" style="float:left;margin-right: 5px;">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <input type="hidden" name="pub" value="<?php echo $item['publish']; ?>">
                            <input type="hidden" name="type" value="1">
                            <input type="hidden" name="user" value="serj">
                            <input type="hidden" name="pass" value="chj316Qs2">
                            <button type="submit" name="submit" style="background:orange;" id="ajaxComm">&hArr;</button>
                        </form>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <input type="hidden" name="type" value="0">
                            <input type="hidden" name="user" value="serj">
                            <input type="hidden" name="pass" value="chj316Qs2">
                            <button type="submit" name="submit" style="background:red;" id="ajaxComm">&#65794;</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('form').submit(function () {
                    var data = $(this).serialize();
                    var id = $(this).serializeArray()[0]['value'];
                    $.ajax({
                        type: "POST",
                        url: "/functions/admcomm.php",
                        data: data,
                        success: function (ans_data) {
                            if (ans_data == 1) {
                                $("#pub-" + id).html('<span style="color:green;">&#10003;</span>');
                            } else if (ans_data == 2) {
                                $("#pub-" + id).html('<span style="color:red;">&#65794;</span>');
                            } else if (ans_data == 3) {
                                $("#pub-" + id).html('<span style="color:red;">ERROR</span>');
                            } else if (ans_data == 4) {
                                $("#" + id).remove();
                            } else if (ans_data == 5) {
                                $("#pub-" + id).html('<span style="color:red;">ERROR</span>');
                            } else if (ans_data == 0) {
                                $("#pub-" + id).html('<span style="color:red;">ERROR</span>');
                            } else {
                                $("#pub-" + id).html('<span style="color:red;">ERROR</span>');
                            }
                        },
                        error: function (error, exception) {
                            alert('ERROR');
                        }
                    });
                });
            });
        </script>
        </body>
        </html>
        <?php
    } else {
        ?>
        <form method="POST">
            User <input type="text" name="user"><br/>
            Pass <input type="password" name="pass"><br/>
            <input type="submit" name="submit" value="Go">
        </form>
        <?php
    }
} else {
    ?>
    <form method="POST">
        User <input type="text" name="user"><br/>
        Pass <input type="password" name="pass"><br/>
        <input type="submit" name="submit" value="Go">
    </form>
    <?php
}
?>