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
    // d - Thể hiện ngày trong tháng (01 đến 31)
    // m - Đại diện cho một tháng (01 đến 12)
    // Y - Đại diện cho một năm (bằng bốn chữ số)
    // l (chữ thường 'L') - Đại diện cho ngày trong tuần

    // H - định dạng 24 giờ của một giờ (00 đến 23)
    // h - Định dạng 12 giờ của một giờ với các số 0 đứng đầu (01 đến 12)
    // i - Phút có số 0 đứng đầu (00 đến 59)
    // s - Giây có số 0 đứng đầu (00 đến 59)
    // a - Chữ thường Ante meridiem và Post meridiem (sáng hoặc chiều)
    
    date_default_timezone_set("America/New_York");
    echo "Today is " .date("H:i:sa l/d/m/Y"); 
    ?>
</body>
</html>