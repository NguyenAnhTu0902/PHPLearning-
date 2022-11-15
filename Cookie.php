<!-- Hàm setcookie()phải xuất hiện TRƯỚC thẻ <html>. -->
<?php
$cookie_name = 'user';
$cookie_value = 'Joe';
setcookie($cookie_name,$cookie_value,time()+(86400*30),'/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ?>
</body>
</html>