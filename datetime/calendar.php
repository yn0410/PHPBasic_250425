<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上日曆</title>
    <style>
        h1{
            color: blue;
            text-align: center;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
        }
        table{
            width: 50%;
            border-collapse: collapse;
            margin: auto;
        }
        table, tr, td{
            border: 1px solid brown;
            text-align: center;
            padding: 5px 10px;
        }

    </style>
</head>
<body>
    <h1>線上日曆</h1>
    <?php
    $today = date("Y-m-d");
    $firstDay = date("Y-m-01");
    $fistDayWeek = date("w", strtotime($firstDay)); //此月第一天是星期幾 >0（星期天）到 6（星期六）
    $theDaysOfMonth = date("t", strtotime($firstDay)); // 此月有幾天
    ?>

    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
    <?php
    for($i=0; $i<6 ;$i++){
        echo "<tr>";

        for($j=0; $j<7; $j++){
            echo "<td>";
            $day = $j+1+($i*7) - $fistDayWeek;
            if($day>0 && $day<=$theDaysOfMonth){
                echo $day;
            }
            
            echo "</td>";
        }

        echo "</tr>";
    }
    ?>
    </table>
    
</body>
</html>