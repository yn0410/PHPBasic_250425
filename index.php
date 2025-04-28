<?php

define("PI",3.1415926);

$age=24;
$name="詹雅年";
$ename="yn";

echo '我的年齡是：' . $age . '歲';
echo "<br>";
echo '我的名字是：' . $name;
echo "<br>";
echo PI;

echo "<hr>";

// define("PI",6.14159); >常數不能改
$age=36;
$name="王小明";

echo '我的年齡是：' . $age . '歲';
echo "<br>";
echo '我的名字是：' . $name;
echo "<br>";
echo PI;


echo "<hr>";
// 20250428練習
// 1.判斷成績及格學生

$score1=59;

if($score1>=60){
    echo '及格';
}else{
    echo '不及格';
}
echo "<br>";

// 2.分配成績等級

$score2=90;

if($score2<=100 && $score2 >= 90){
    echo 'A';
}else if($score2<=89 && $score2>=80){
    echo 'B';
}else if($score2<=79 && $score2>=70){
    echo 'C';
}else if($score2<=69 && $score2>=60){
    echo 'D';
}else{
    echo 'E';
}
echo "<br>";

// 3. 依據學生成績等級給予評價
$level="B";

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
    default:
        echo "是否無心學業?";

}



?>