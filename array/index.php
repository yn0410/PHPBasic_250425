<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
    <h1>陣列設計</h1>
    <h2>練習-1 建立一個學生成績陣列 &印出它</h2>
    <?php
        $students=[
            'judy'=>[ '國文'=>95, '英文'=>64, '數學'=>70, '地理'=>90, '歷史'=>84 ],
            'amo'=>[ '國文'=>88, '英文'=>78, '數學'=>54, '地理'=>81, '歷史'=>71 ],
            'john'=>[ '國文'=>45, '英文'=>60, '數學'=>68, '地理'=>70, '歷史'=>62 ],
            'peter'=>[ '國文'=>59, '英文'=>32, '數學'=>77, '地理'=>54, '歷史'=>42 ],
            'hebe'=>[ '國文'=>71, '英文'=>62, '數學'=>80, '地理'=>62, '歷史'=>64 ]
        ];
        // echo $students['judy']['國文'];


        //以下為 老師code
        // echo key($students['judy']);

        /*for($i=0; $i<count($students); $i++){ //count($test)=5 =陣列元素個數
            echo key($students);
        }*/

        /*$test=[95, 64, 70, 90, 84];
        for($i=0; $i<count($test); $i++){ //count($test)=5 =陣列元素個數
            echo $test[$i];
            echo "<br>";
        }*/
        
        /*foreach($students as $student){
            echo "<pre>";
            print_r($student);
            echo "</pre>";
        }*/

        echo "<h3>1. 使用foreach()</h3>";
        foreach($students as $name => $score){
            echo $name."=";
            // echo "<ul style='list-style-type:circle'>";
            foreach($score as $subject => $grades){
                // echo "<li>";
                echo $subject."：";
                echo $grades;
                echo "<br>";
                // echo "</li>";
            }
            // echo "</ul>";
        }

        echo "<hr>";
        echo "<h3>2. 使用for()</h3>";
        $names=array_keys($students);
        for($i=0; $i<count($names); $i++){
            $n=$students[$names[$i]];
            $subjects=array_keys($n);
            echo $names[$i];
            echo "的成績<br>";

            for($j=0; $j<count($n); $j++){
                echo $subjects[$j];
                echo "：";
                echo $n[$subjects[$j]];
                echo "<br>";
            }
        }

        echo "<hr>";
        echo "序列化 &反序列化<br>";
        echo "// & json格式<br>";
        $ss=serialize($students);
        echo serialize($students);
        echo "<br>";
        $aa=unserialize($ss);
        print_r($aa);
    ?>
    <hr>
    <h2>練習-2 利用程式來產生陣列</h2>
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul>

    <?php
        $array=[];

        for($i=1; $i<=9; $i++){
            for($j=1; $j<=9; $j++){
                $result="$i x $j = " . ($i*$j);
                $array[]=$result;
                // echo $result . "<br>";
            }
        }

        /*echo "<pre>";
        print_r($array);
        echo "</pre>";*/

        /*foreach($array as $value){
             echo $value . "<br>";
        }

        echo "<br>";
        echo $array[30];*/


        $array2=[];
        for($i=1; $i<=9; $i++){
            for($j=1; $j<=9; $j++){
                $result="$i x $j = " . ($i*$j);
                $array2[$i . $j]=$result;
            }
        }

        foreach($array2 as $key => $value){
            echo $key . " => " . $value . "<br>";
       }
       echo "<br>";
       echo $array2[44];
    ?>

    <hr>
    <h2>練習-3 威力彩電腦選號 沒有重覆號碼(利用while迴圈)</h2>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>
    <?php
        //我想的code >有問題：只能產生6個亂數，無法產生6個"不重複"亂數
        $min = 1;
        $max = 38;
        $array3=[];

        for($i=0; $i<6; $i++){
            $num = rand($min, $max);
            echo $num . "<br>";
            while(!in_array($num, $array3)){
                $array3[$i]=$num;
            }
            
        }
        print_r($array3);
        echo "<br>";
        echo "<br>";

        //老師code-1
        //>一樣有問題：只能產生6個亂數，無法產生6個"不重複"亂數
        $lotto=[];
        for($i=0; $i<6; $i++){
            $num = rand(1, 38);
            echo $num . " ";
            //檢查陣列中有沒有重複號碼
            if(!in_array($num, $lotto)){
                $lotto[]=$num;
            }
            
        }
        echo "<pre>";
        print_r($lotto);
        echo "</pre>";


        //老師code-2
        //>解決問題：只能產生6個亂數，無法產生6個"不重複"亂數 >用while()
        //當陣列數量<6時，產生亂數並存進陣列裡 =>當陣列數量=6時，停止動作
        $lotto=[];
        while(count($lotto)<6){
            $num = rand(1, 38);
            //檢查陣列中有沒有重複號碼
            if(!in_array($num, $lotto)){
                $lotto[]=$num;
            }
        }
        foreach($lotto as $value){
            echo $value . " ";
        }
        echo "<br>";
        echo "<br>";


        //老師code-3
        //更精簡的程式碼 >用到 array_pop() & array_shift() & shuffle() >陣列會變短
        $nums=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];
        $lotto=[];

        for($i=0; $i<6; $i++){
            shuffle($nums);
            $lotto[]=array_pop($nums);
            echo count($nums) . ",";
        }
        echo "<br>";

        foreach($lotto as $value){
            echo $value . " ";
        }
    ?>

    <hr>
    <h2>練習-4 找出五百年內的閏年</h2>
    <ul>
        <li>請依照閏年公式找出五百年內的閏年</li>
        <li>使用陣列來儲存閏年</li>
        <li>使用迴圈來印出閏年</li>
    </ul>
    <?php
        //老師code-1
        $year=[];

        for($i=2025; $i<=2525; $i++){
            if($i%4==0 && ($i%100!=0) || ($i%400==0)){
                $year[]=$i;
            }
        }

        foreach($year as $value){
            echo $value . ", ";
        }
        echo "<br>";

        $theyear=2400;
        if(in_array($theyear, $year)){
            echo $theyear . "是閏年";
        }else{
            echo $theyear . "不是閏年";
        }


        //老師code-2
        $year2=[];
        for($i=2025; $i<=2525; $i++){
            if($i%4==0 && ($i%100!=0) || ($i%400==0)){
                $year2[$i]=true;
            }else{
                $year2[$i]=false;
            }
        }
        echo "<br>";
        
        $ty=2100;
        //老師code-2-1 用if else
        /*if($year2[$ty]){
            echo $ty . "是閏年";
        }else{
            echo $ty . "不是閏年";
        }
        echo "<br>";*/

        //老師code-2-2 用三元運算子
        echo $ty . ($year2[$ty]?"是閏年":"不是閏年") . "<br>";
    ?>

    <hr>
    <h2>練習-5 已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
    <ul>
        <li>天干：甲乙丙丁戊己庚辛壬癸</li>
        <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
        <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
    </ul>
    <?php
        //老師code-1 
        //照天干順序 依序列出
        $s=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
        $e=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
        
        $d=[];
        for($i=0; $i<10; $i++){

            $z=($i%2?1:0); //若i=偶數,j從0開始 ;若i=奇數,j從1開始
            for($j=$z; $j<12; $j=$j+2){
                $d[]=$s[$i].$e[$j];
            }
        }
        echo "<pre>";
        print_r($d);
        echo "</pre>";

        
        //老師code-2
        //照天干地支一對一配對 依序列出
        $d=[];
        $startYear=1984;
        for($j=0;$j<500;$j++){

            $d[$startYear+$j]=$s[$j%10].$e[$j%12];
        }
        /*echo "<pre>";
        print_r($d);
        echo "</pre>"; */
        echo 2025 . "年是" . $d[2025] . "<br>";


        //老師code-3
        //實際年份去當索引值 列出哪年的天干地支
        //老師沒留這個code
        /*$d=[];
        $staryear=1984;
        for($j=0; $j<500; $j++){
                $d[$staryear]=$s[$i].$s[$j]; //老師這邊怪怪的...???
        }
        echo "<pre>";
        print_r($d);
        echo "</pre>";*/

        //老師code-4
        //任何年分都能去找出它對應的天干地支
        $d=[];
        $y=2136;

        for($j=0;$j<60;$j++){
            $d[]=$s[$j%10].$e[$j%12];
        }
        echo "<pre>";
        print_r($d);
        echo "</pre>";

        echo "西元". $y . "年是 " . $d[($y)%60-4] . " 年"; //$y=2100會出錯 >($y)%60-4 =-4(待改)

    ?>

    <hr>
    <h2>練習-6 請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
    <p>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</p>
    <?php
        $a=[2,4,6,1,8];
        echo "<pre>";
        print_r($a);
        echo "</pre>";

        //反轉
        for($i=0; $i<floor(count($a)/2); $i++){
            $temp=$a[$i];
            $a[$i]=$a[count($a)-1-$i];
            $a[count($a)-1-$i] = $temp;
        }
        echo "<pre>";
        print_r($a);
        echo "</pre>";

        //反轉
        echo "<pre>";
        print_r(array_reverse($a));
        echo "</pre>";
    ?>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>



</body>
</html>