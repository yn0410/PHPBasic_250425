<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理</title>
    <style>
        h1{
            text-align: center;
            font-size: 1.5em;
            color: blue;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>字串處理</h1>

    <h2>練習-1 字串取代</h2>
    <p>將”aaddw1123”改成”*********”</p>
    <?php

    $str = "aaddw1123";

    // sol -1
    /*$str = str_replace("a", "*", $str);
    $str = str_replace("d", "*", $str);
    $str = str_replace("w", "*", $str);
    $str = str_replace("1", "*", $str);
    $str = str_replace("2", "*", $str);
    $str = str_replace("3", "*", $str);*/

    // sol -2
    // $str = str_replace(["a", "d", "w", "1", "2", "3"], "*", $str);

    // sol -3
    // 把字串拆成陣列，去取代
    // $str = str_replace(str_split($str, 1), "*", $str);

    // sol -4
    $str = str_repeat("*", strlen($str));

    echo $str;
    ?>
    <p>&nbsp;</p>

    
    <hr>
    <h2>練習-2 字串分割</h2>
    <p>將”this,is,a,book”依”,”切割後成為陣列</p>
    <?php

    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-3 字串組合</h2>
    <p>將上例陣列重新組合成“this is a book”</p>
    <?php

    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-4 子字串取用</h2>
    <p>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</p>
    <?php

    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-5 尋找字串與HTML、css整合應用</h2>
    <p>給定一個句子，將指定的關鍵字放大</p>
    <p>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</p>
    <p>請將上句中的 “程式設計” 放大字型或變色.</p>
    <?php

    ?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</body>
</html>