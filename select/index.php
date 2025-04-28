<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇結構</title>
</head>
<body>
    <h1>判斷成績</h1>
    <p>給定一個成績數字，判斷是否及格(60)分</p>
    <p>1.不及格使用紅色字顯示，及格使用綠色字顯示</p>
    <p>2.判斷$score是否是數字，如果不是數字，則提示錯誤</p>
    <?php
    $score="75";

    //判斷$score是否是數字 way1
    /*if(is_numeric($score)){ 

    }else{
        echo '請輸入合法的成績數字';
        exit(); //之後的程式就不會執行了
    }*/

    //判斷$score是否是數字 way2
    /*if(!is_numeric($score)){ 
        echo '請輸入合法的成績數字';
        exit(); //之後的程式就不會執行了
    }*/

    //判斷$score是否是數字 且是合理範圍(0~100) way1
    /*if(is_numeric($score) && $score>=0 && $score<=100){ 

    }else{
        echo '請輸入合法的成績數字';
        exit(); //之後的程式就不會執行了
    }*/

    //判斷$score是否是數字 且是合理範圍(0~100) way2
    if(!is_numeric($score) || ($score<0 || $score>100) ){ 
        echo "請輸入合法的成績數字";
        exit(); //之後的程式就不會執行了
    }

    echo "你的成績是：".$score."分";
    echo "<br>";
    echo "判定結果：";

    if($score>=60){
        echo "<span style='color:green'>及格</span>";
    }else{
        echo "<span style='color:red'>不及格</span>";
    }

    ?>
    <h2>分配成績等級</h2>
    <ul>
    <li>給定一個成績數字，根據成績所在的區間，給定等級</li>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
    </ul>
    <?php
    $level='';
    if($score>=0 && $score<=59){ //巢狀
        $level = 'E';
    }else if($score>=60 && $score<=69){
        $level = 'D';
    }else if($score>=70 && $score<=79){
        $level = 'C';
    }else if($score>=80 && $score<=89){
        $level = 'B';
    }else{
        $level = 'A';
    }
    echo "<br>";
    echo $level;
    ?>

    <h2>依據學生成績等級給予評價</h2>
    <p>根據學生不同的成績等級在網頁上印出不同的文字評價</p>
    <?php
        switch($level){
            case "A":
                echo "表現優良，請繼續保持";
            break;
            case "B":
                echo "值得肯定，還有進步空間";
            break;
            case "C":
                echo "需要更多的練習";
            break;
            case "D":
                echo "需要加強基本功";
            break;
            case "E":
                echo "是否無心學業?";
            break;
            default: //打錯字??
                echo "請告知工程人員，修復錯誤";
        }

    ?>
    <hr>
    <h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
    <ul>
    <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
    <li>公元年分除以4不可整除，為平年。</li> 
    <!-- 公元年分除以4可整除，為閏年。 -->
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
    </ul>
    <?php
        $year=2024;
        /*if($year%4==0){
            if($year%100!=0){
                echo "閏年";
            }else{
                if($year%400!=0){
                    echo "平年";
                }else{
                    echo "閏年";
                }
            }            
        }else{
            echo "平年";
        }*/
        
        if($year%4==0 && ($year%100!=0) || ($year%400==0)){
            echo "閏年";
        }else{
            echo "平年";
        }


    ?>
    <!-- &nbsp 不斷行空白-->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>    



</body>
</html>
