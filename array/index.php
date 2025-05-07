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


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>



</body>
</html>