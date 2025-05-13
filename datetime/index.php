<!DOCTYPE html>

<?php
// 每隔一秒 網頁自動重整一次
// header("Refresh:1");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>日期/時間</h1>
    <h2>基本函式使用</h2>
    <?php
        date_default_timezone_set("Asia/Taipei");
        echo "台北 = ";
        echo date("Y-m-d H:i:s"); //取得當前的日期和時間
        echo "<br>";
        //echo date("Y-m-d"); //將字串轉換為時間戳記
        //echo "<br>";
        date_default_timezone_set("Asia/Tokyo");
        echo "東京 = ";
        echo date("Y-m-d H:i:s"); //取得當前的日期和時間
        echo "<br>";
        date_default_timezone_set("Asia/Bangkok");
        echo "曼谷 = ";
        echo date("Y-m-d H:i:s"); //取得當前的日期和時間
        echo "<br>";
    ?>
    <p>&nbsp;</p>

    <hr>
    <h2>時間戳記</h2>
    <?php
    //
    $timestamp = time();
    echo "當前的時間戳記：$timestamp<br>";

    //
    $dateString = "2023-10-01 12:00:00";
    echo "日期字串： $dateString<br>";
    $timestampFromString = strtotime($dateString);
    echo "字串轉換為時間戳記: $timestampFromString<br>";

    //
    $dateFromTimestamp = date("Y-m-d H:i:s", $timestamp);
    echo "時間戳記轉換為日期字串: $dateFromTimestamp<br>";

    echo "<br>";
    ?>
    <p>&nbsp;</p>

    <hr>
    <h2>練習-1 給定兩個日期，計算中間間隔天數</h2>
    <?php
    $date1 = "2025-5-01";
    $date2 = "2025-5-21";
    echo "日期1：$date1<br>";
    echo "日期2：$date2<br>";

    $date1_timestamp = strtotime($date1);
    $date2_timestamp = strtotime($date2);
    $diff = $date2_timestamp - $date1_timestamp;
    $days = ($diff/(60*60*24));
    echo "兩日期相差 $days 天<br>";
    ?>
    <p>&nbsp;</p>

    <hr>
    <h2>strtotime的用法</h2>
    <?php
    //老師code
    
    ?>
    <p>&nbsp;</p>
    <hr>
    <h2>練習-2 計算距離自己下一次生日還有幾天</h2>
    <?php
    //老師code
    $birthday = "2001-04-10"; // 設定自己的生日
    $birthday_array=explode("-",$birthday); // 將生日字串轉換為陣列
    $birthday_array[0]=date("Y"); // 將生日的年份改為當前年份

    $nextBirthday = join("-",$birthday_array); // 將陣列轉換為字串

    $today=strtotime(date("Y-m-d")); // 取得當前的時間戳記
    //echo "今天的時間戳記：$today<br>";
    $birthday_timestamp=strtotime($nextBirthday); // 將生日字串轉換為時間戳記
    //echo "生日的時間戳記：$birthday_timestamp<br>";

    if($today>$birthday_timestamp){ //表示今年生日過了
        $birthday_timestamp=strtotime("+1 year",$birthday_timestamp); // 將生日時間戳記+1年
    }

    $birthday_diff=$birthday_timestamp-$today; // 計算兩個時間戳記的差值
    $days=($birthday_diff/(60*60*24)); // 將差值轉換為天數

    echo "我的出生日是：$birthday<br>";
    echo "距離自己下一次生日還有 $days 天";

    echo "<br>";
    ?>
    <p>&nbsp;</p>

    <hr>
    <h2>練習-3 利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
    <?php

    echo "<br>";
    ?>
    <p>&nbsp;</p>

    <hr>
    <h2>練習-4 利用迴圈來計算連續五個周一的日期</h2>
    <?php

    echo "<br>";
    ?>
    <p>&nbsp;</p>

    <hr>
    <h2>練習-5 線上月曆製作</h2>
    <?php

    echo "<br>";
    ?>




    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>