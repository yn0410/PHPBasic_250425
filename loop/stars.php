<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈畫星星</title>
</head>
<body>
<h2>以 * 符號為基礎在網頁上排列出下列圖形:</h2>
    <ul>
        <li>直角三角型</li>
        <li>倒直角三角型</li>
        <li>正三角型</li>
        <li>菱型</li>
        <li>矩形</li>
        <li>內含對角線的矩形</li>
    </ul>

    <h3>基礎</h3>
    <?php
        for($i=0; $i<5; $i++){
            for($j=0; $j<5; $j++){
                echo "*";
            }
            echo "<br>";
        }
    ?>

    <h3>直角三角型</h3>
    <!-- <p>還沒想好(?)</p> -->
    <?php
        for($i=0; $i<5; $i++){
            for($j=0; $j<5; $j++){
                if($i>=$j){
                    echo "*";
                }else{
                    echo " ";
                }
                
            }
            echo "<br>";
        }
    ?>

    <h3>倒直角三角型</h3>
    <!-- <p>還沒想好</p> -->
    <!-- 結果有出來就好了啦... -->
    <?php
        for($i=0; $i<5; $i++){
            for($j=0; $j<5; $j++){
                if($i<=$j){
                    echo "*";
                }
            }
            echo "<br>";
        }
    ?>

    <h3>正三角型</h3>
    <!-- <p>還沒想好</p> -->
    <?php
        for($i=0; $i<5; $i++){
            for($k=4-$i; $k>0; $k--){
                echo "&nbsp;";
            }
            for($j=0; $j<2*$i+1; $j++){
                echo "*";
            }
            echo "<br>";
        }
    ?>

    <h3>菱型</h3>
    <p>還沒想好</p>
    <?php
        for($i=0; $i<5; $i++){
            for($j=0; $j<5; $j++){
                if($i<=$j){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }
                
            }
            echo "<br>";
        }
    ?>
    
    <h3>矩形 法一</h3>
    <p>暴力拆解法(?)</p>
    <?php
        for($i=0;$i<7; $i++){
        //    echo "1";
           echo "*";
        }
        echo "<br>";
        for($i=0;$i<5; $i++){
            for($j=0; $j<7; $j++){
                if($j==0 || $j==6){
                    // echo "2";
                    echo "*";
                }else{
                    echo "&nbsp;";
                }

            }
            echo "<br>";
        }
        for($i=0;$i<7; $i++){
            // echo "1";
            echo "*";
         }

    ?>

    <h3>矩形 法二</h3>
    <p>聽老師講解完 我自己打出來的</p>
    <?php
        // $w=7; //邊長
        for($i=0;$i<7; $i++){
            for($j=0; $j<7; $j++){
                if($i==0 || $i==7-1 || $j==0 || $j==7-1){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }

            }
            echo "<br>";
        }
    ?>
    
    <h3>內含對角線的矩形</h3>
    <!-- <p>還沒想好</p> -->
    <?php
        // $w=7; //邊長
        for($i=0;$i<7; $i++){
            for($j=0; $j<7; $j++){
                if($i==0 || $i==7-1 || $j==0 || $j==7-1 || $i==$j || $i+$j==7-1){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }

            }
            echo "<br>";
        }
    ?>
    <h3>內含對角線的菱形</h3>
    <p>連菱形都還沒想好了...</p>
    <?php
        $i=0;
    ?>




    <hr>
    <h1>老師打的</h1>

    <h3>直角三角型</h3>
    <?php
        for($i=0; $i<5; $i++){
            for($j=0; $j<5; $j++){
                if($i>=$j){
                    echo "*";
                }                
            }
            echo "<br>";
        }
    ?>

    <h3>倒三角型-1</h3>
    <?php
        for($i=0; $i<5; $i++){
            for($j=0; $j<5; $j++){
                if($i<=$j){
                    echo "*";
                }
            }
            echo "<br>";
        }
    ?>
    <h3>倒三角型-2</h3>
    <p>同學想的 for兩行交換</p>
    <?php
        for($j=0; $j<5; $j++){
            for($i=0; $i<5; $i++){
                if($i>=$j){
                    echo "*";
                }
            }
            echo "<br>";
        }
    ?>

    <h3>倒三角型-3</h3>
    <?php
        for($i=4; $i>=0; $i--){
            for($j=0; $j<5; $j++){
                if($i>=$j){
                    echo "*";
                }
            }
            echo "<br>";
        }
    ?>

    <h3>正三角型</h3>
    <!-- 字型不等寬 把所有tag裡 改成一個等寬的字型 -->
    <style>
        *{
            font-family:'Courier New', Courier, monospace;
        }
    </style>
    <?php
        $stars=5;

        for($i=0; $i<$stars; $i++){
            for($k=0; $k<$stars-1-$i; $k++){
                echo "&nbsp;";
            }
            for($j=0; $j<2*$i+1; $j++){
                echo "*";
            }
            echo "<br>";
        }
    ?>

    <h3>菱型</h3>
    <?php
        $stars=9; //只能是奇數

        if($stars%2==0){ //若是偶數 強制改成奇數
            $stars=$stars+1;
        }

        for($i=0; $i<$stars; $i++){ //印菱形
            if($i<=floor($stars/2)){ 
                $y=$i;
            }else{
                $y=$stars -1 -$i;
            }

            for($j=0; $j<floor($stars/2)-$y; $j++){ //印空白
                echo "&nbsp;";
            }

            for($k=0; $k<$y*2+1; $k++){//印*
                echo "*";
            }
            echo "<br>";
        }
    ?>
    
    
    <h3>矩形</h3>
    <?php
        $w=5; //邊長
        for($i=0;$i<$w; $i++){
            for($j=0; $j<$w; $j++){
                if($i==0 || $i==$w-1 || $j==0 || $j==$w-1){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }

            }
            echo "<br>";
        }
    ?>
    
    
    <h3>內含對角線的矩形</h3>
    <?php
        $w=7; //邊長
        for($i=0;$i<$w; $i++){
            for($j=0; $j<$w; $j++){
                if($i==0 || $i==$w-1 || $j==0 || $j==$w-1 || $i==$j || $i==$w-1-$j){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }

            }
            echo "<br>";
        }
    ?>


    <h3>中空的菱形</h3>
    <!-- 玄學... -->
    <?php
        $stars=9; //只能是奇數

        if($stars%2==0){ //若是偶數 強制改成奇數
            $stars=$stars+1;
        }

        for($i=0; $i<$stars; $i++){ //印菱形
            if($i<=floor($stars/2)){ 
                $y=$i;
            }else{
                $y=$stars -1 -$i;
            }

            for($j=0; $j<floor($stars/2)-$y; $j++){ //印左邊的空白
                echo "&nbsp;";
            }

            for($k=0; $k<$y*2+1; $k++){ //印菱形(*&空白)
                if(($y+$k+$j)==4 || abs($y-($k+$j))==4){
                    echo "*";
                }else{
                    echo "&nbsp;";
                }
                
            }
            echo "<br>";
        }
    ?>

<h3>內含對角線的菱形</h3>
    <!-- 玄學... -->
    <?php
        $stars=9; //只能是奇數

        if($stars%2==0){ //若是偶數 強制改成奇數
            $stars=$stars+1;
        }

        for($i=0; $i<$stars; $i++){ //印菱形
            if($i<=floor($stars/2)){ 
                $y=$i;
            }else{
                $y=$stars -1 -$i;
            }

            for($j=0; $j<floor($stars/2)-$y; $j++){ //印左邊的空白
                echo "&nbsp;";
            }

            for($k=0; $k<$y*2+1; $k++){//印菱形(*&空白)
                if(($y+$k+$j)==floor($stars/2) || abs($y-($k+$j))==floor($stars/2) || ($k+$j)==floor($stars/2) || $i==floor($stars/2)){ //floor($stars/2)=4
                    echo "*";
                }else{
                    echo "&nbsp;";
                }
                
            }
            echo "<br>";
        }
    ?>



    <hr>
    <h2>尋找字元</h2>
    <p>(老師教的)</p>
    <?php
        $string="This is a good day";
        $target="a";
        echo "字串=".$string."<br>";
        echo "目標字元=".$target."<br>";
        echo "字串長度=".strlen($string)."<br>";

        $is_find=0; //is_find預設為false=0
        $counter=0;

        while($is_find==0 && $counter<strlen($string)){ // &&找完字串 沒找到就跳出迴圈
            if($string[$counter] == $target){
                $is_find=1;
            }
            // echo $is_find;
            // echo ",";
            // echo $counter;
            $counter++;
            // echo ",";
            // echo $counter;
            // echo "<br>";
        }
        if($is_find){
            echo "目標字元".$target."在字串的第".$counter."個位置";
        }else{
            echo "字串中沒有你要找的".$target;
        }
    ?>

<h2>尋找字元 - 中文字</h2>
    <p>(老師教的)</p>
    <?php
        $string="今天真是個出遊的好日子啊~";//一個字 =3 byte
        $target="個";
        echo "字串=".$string."<br>";
        echo "目標字元=".$target."<br>";
        echo "字串長度=".mb_strlen($string)."<br>"; //multibyte string

        $is_find=0; //is_find預設為false=0 >找到的話=1
        $counter=0;

        while($is_find==0 && $counter<mb_strlen($string)){ // &&找完字串 沒找到就跳出迴圈
            // echo mb_substr($string,$counter,1);
            // echo "-<br>";
            if(mb_substr($string,$counter,1) == $target){
                $is_find=1;
            }
            // echo $is_find;
            // echo ",";
            // echo $counter;
            $counter++;
            // echo ",";
            // echo $counter;
            // echo "<br>";
        }
        if($is_find){
            echo "目標字元".$target."在字串的第".$counter."個位置";
        }else{
            echo "字串中沒有你要找的'".$target."'";
        }
    ?>

    <h2>尋找字元 - 中文詞</h2> 
    <!-- 英文詞也能用 -->
    <p>(老師教的)</p>
    <?php
        $string="今天真是個出遊的好日子啊~";//一個字 =3 byte
        $target="出遊";
        echo "字串=".$string."<br>";
        echo "目標字元=".$target."<br>";
        echo "字串長度=".mb_strlen($string)."<br>"; //multibyte string

        $is_find=0; //is_find預設為false=0 >找到的話=1
        $counter=0;

        while($is_find==0 && $counter<mb_strlen($string)){ // &&找完字串 沒找到就跳出迴圈
            // echo mb_substr($string,$counter,1);
            // echo "-<br>";
            if(mb_substr($string,$counter,mb_strlen($target)) == $target){
                $is_find=1;
            }
            // echo $is_find;
            // echo ",";
            // echo $counter;
            echo mb_substr($string,$counter,mb_strlen($target));
            $counter++;
            // echo ",";
            // echo $counter;
            echo "<br>";
        }
        if($is_find){
            echo "目標字元".$target."在字串的第".$counter."個位置";
        }else{
            echo "字串中沒有你要找的'".$target."'";
        }
    ?>

    <hr>
    <!-- <p>(老師教的)</p> -->
    <?php //mb_strpos() 此function功能 =上面的"尋找字元 - 中文詞"
        echo mb_strpos($string, $target);
    ?>
    


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>