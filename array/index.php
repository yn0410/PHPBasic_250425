<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
    <h1>陣列設計</h1>
    <h2>建立一個學生成績陣列 &印出它</h2>
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


    ?>

    


</body>
</html>