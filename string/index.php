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
    $str2 = "this,is,a,book";
    
    $str2 = explode(",", $str2);

    print_r($str2);
    echo "<br>";
    echo $str2[0];
    echo "<br>";
    // echo $str2; //echo 不能輸出陣列
    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-3 字串組合</h2>
    <p>將上例陣列重新組合成“this is a book”</p>
    <?php
    // $str3 = implode(" ", $str2);
    $str3 = join(" ", $str2);
    echo $str3;
    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-4 子字串取用</h2>
    <p>將” The reason why a great man is great is that he resolves to be a great man”只取前十字(元)成為” The reason…”</p>
    <?php
    $str4 = "The reason why a great man is great is that he resolves to be a great man";
    $str4 = substr($str4, 0, 10) . "...";

    // 老師做法
    // $str4 = mb_substr($str4, 0, 10, "utf-8") . "...";


    echo $str4;
    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-5 尋找字串與HTML、css整合應用</h2>
    <p>1.給定一個句子，將指定的關鍵字放大</p>
    <p>2.“學會PHP網頁程式設計，薪水會加倍，工作會好找”</p>
    <p>3.請將上句中的 “程式設計” 放大字型或變色.</p>
    <!-- “學會PHP網頁<span style="font-size: 28px; color: blue;">程式設計</span>，薪水會加倍，工作會好找” -->
    
    <?php
    $str5 = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $keyword = "程式設計";
    $style = "font-size: 28px; color: blue;";

    $str5 = str_replace("$keyword", "<span style = '$style'>$keyword</span>", $str5);

    echo $str5;
    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-5 的延伸應用-1</h2>    
    <?php
    $str51 = "連鎖超市「全聯福利中心」因為商品琳瑯滿目，價格經濟實惠，深受許多人喜愛。就有店員發文透露「最討厭顧客購買的兩樣商品」，曝光它們是讓結帳速度很慢的元兇，引起熱烈討論。
    有全聯店員在社群平台Threads發文曬出兩張照片表示，全聯店員最討厭的兩種東西分別是金針菇以及鹼性離子水，原因是條碼非常難刷「掃碼槍都快按破了還掃不出來」。一篇貼文意外釣出一票店員留言附和：「金針菇我熟的條碼都背起來了」、「金針菇的條碼我到最後直接背起來，用打的會比較快」、「金針菇還要小心的掰開，我有同事弄到失去真空，被客人客訴過……」「第一次刷金針菇的我結帳從順暢變塞車」、「偏偏每天都有一堆人買金針菇，條碼都背的牢牢的」、「之前做超商都時候，那個水刷到真的會爆氣。」
    另外也有店員透露，山藥條碼也很難刷：「還有山藥跟保久乳，每次保久乳都會缺一角」、「那個山藥也很難刷…條碼全部都被抽真空擠在一團 」。不少曾經購買上述兩樣產品的的網友也回應：「那個水真的可以感受到他們很討厭，永遠刷不過要自己打條碼」「我很常買…但是為何買3個就要刷3次？不能乘3嗎？一直很疑問！」「那店員會很討厭我，我很愛吃金針菇」。";
    $keyword = "全聯";
    $keyword2 = "金針菇";
    $style = "font-size: 28px; color: blue;";
    $style2 = "font-size: 2em; color: red;";
    echo $str51;
    echo "<br>";
    echo "<br>";

    $str51 = str_replace("$keyword", "<span style = '$style'>$keyword</span>", $str51);
    $str51 = str_replace("$keyword2", "<span style = '$style2'>$keyword2</span>", $str51);

    echo $str51;
    ?>
    <p>&nbsp;</p>


    <hr>
    <h2>練習-5 的延伸應用-2</h2>
    <!-- 之前有人面試遇過這題型 -->
    <?php
    $str52 = "蘋果公司擬漲iPhone售價，《華爾街日報》消息指出，蘋果正在考慮即將在秋季推出的新一代iPhone系列漲價，將與新功能及新設計變化結合，包括推出超薄設計，但蘋果不願將漲價歸咎於美中貿易戰加徵關稅，因為大多數設備仍在中國組裝。<br>
    美中12日發布聯合聲明，針對關稅暫緩90天達成協議，互相下調115%報復性關稅，讓持續多時的貿易戰露出一線曙光，蘋果股價也在盤前應聲上漲7%，不過中國進口商品再美國仍將面臨30%的關稅。<br>
    事實上，蘋果曾表示，這場關稅戰將在4至6月這一季度增加大約9億美元的成本，為減輕關稅對供應鏈的衝擊，已轉至印度生產，CEO庫克（Tim Cook）指出，來自印度的iPhone將在第二季占多數美國銷售機型。分析師也一直推測蘋果將會提高iPhone售價，而漲價後的iPhone有可能會被對手三星等公司搶占市場。<br>
    ▲蘋果擬漲價新一代iPhone。（資料照／記者湯興漢攝）<br>
    目前iPhone 16系列型號在美國最便宜的售價為799美元，加上關稅後，分析預測可能將漲價到1142美元，漲幅高達43%。<br>
    《華爾街日報》引述知情人士消息報導，蘋果計畫在秋季推出新一代iPhone，在外型和設計上都有變化，像是增加「超薄款」，以此合理化漲價，不過蘋果最賺錢的iPhone Pro、Pro Max型號仍會在中國生產，因為印度工廠還無法在規模和產量上追上中國。";
    echo $str52;
    echo "<br>";
    echo "<br>";

    $keywords = ["蘋果", "iPhone", "美國", "中國"];
    $style = ["font-size: 28px; color: blue;", 
    "font-size: 30px; color: green;",
    "font-size: 24px; color: pink;",
    "font-size: 20px; color: red;"];

    foreach($keywords as $index => $keyword){
        $str52 = str_replace("$keyword", "<span style = '$style[$index]'>$keyword</span>", $str52);
    }
    
    echo $str52;
    echo "<br>";
    echo "<br>";
    echo "<br>";


    // 延伸：在指定關鍵字中加上url連結
    // <a href="url">keyword</a>
    $kw = "iPhone";
    $u = "https://www.apple.com/tw/iphone/?afid=p238%7CsiI4hs9Hz-dc_mtid_2092576n66464_pcrid_733789843661_pgrid_167437216539_pexid__ptid_kwd-2385162286764_&cid=wwa-tw-kwgo-iphone-slid---productid--NonCore-iPhone-avail022025-";
    $str52 = str_replace("$kw", "<a href = '$u'>$kw</a>", $str52);

    echo $str52;
    echo "<br>";


    ?>

    

    <p>&nbsp;</p>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</body>
</html>