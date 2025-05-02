<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈</title>
</head>
<body>
    <h2>迴圈-使用for迴圈來產生以下的數列</h2>
    <ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
    </ul>
    
    <?php
    // 1.
    for($i=1; $i<30; $i=$i+2){
        echo $i . ',';
    }
    echo "<br>";

    // 2. 法一
    for($i=10; $i<100; $i=$i+10){
        echo $i . ",";
    }
    echo "<br>";
    // 2. 法二 較好 條件較乾淨
    for($i=1; $i<10; $i=$i+1){
        echo $i*10 . ",";
    }
    echo "<br>";

    // 3. 質數
    // $ta=50; //target
    for($j=3;$j<=100;$j=$j+2){
        $test=true;
        $count=0;
        for($i=3; $i<$j; $i=$i+1){
            $count++;
            if($j % $i==0){
                $test = false;
                // echo $ta . "不是質數";
                break;
            }
        }
        /*if($test){
            echo $j . "是質數";
    
        }else{
            echo $j . "不是質數";
        }
        echo "-";
        echo "迴圈跑了".$count."次<br>";*/

        if($test){
            echo $j . ",";
    
        }
    }
    ?>
    <hr>
    <h2>九九乘法表 表格</h2>
    <!-- 1.
    <table border=1>
        <tr>
            <td>1 x 1 = 1</td>
            <td>1 x 2 = 2</td>
            <td>1 x 3 = 3</td>
            <td>1 x 4 = 4</td>
            <td>1 x 5 = 5</td>
            <td>1 x 6 = 6</td>
            <td>1 x 7 = 7</td>
            <td>1 x 8 = 8</td>
            <td>1 x 9 = 9</td>
        </tr>
        <tr>
            <td>2 x 1 = 1</td>
            <td>2 x 2 = 2</td>
            <td>2 x 3 = 3</td>
            <td>2 x 4 = 4</td>
            <td>2 x 5 = 5</td>
            <td>2 x 6 = 6</td>
            <td>2 x 7 = 7</td>
            <td>2 x 8 = 8</td>
            <td>2 x 9 = 9</td>
        </tr>
        <tr>
            <td>3 x 1 = 1</td>
            <td>3 x 2 = 2</td>
            <td>3 x 3 = 3</td>
            <td>3 x 4 = 4</td>
            <td>3 x 5 = 5</td>
            <td>3 x 6 = 6</td>
            <td>3 x 7 = 7</td>
            <td>3 x 8 = 8</td>
            <td>3 x 9 = 9</td>
        </tr>

    </table> -->

    <!-- 2.沒看到... -->
    <!-- <table border=1>
        <tr>
            <td>1 x 1 = 1</td>
            <td>1 x 2 = 2</td>
            <td>1 x 3 = 3</td>
            <td>1 x 4 = 4</td>
            <td>1 x 5 = 5</td>
            <td>1 x 6 = 6</td>
            <td>1 x 7 = 7</td>
            <td>1 x 8 = 8</td>
            <td>1 x 9 = 9</td>
        </tr>
        <tr>
            <td>2 x 1 = 1</td>
            <td>2 x 2 = 2</td>
            <td>2 x 3 = 3</td>
            <td>2 x 4 = 4</td>
            <td>2 x 5 = 5</td>
            <td>2 x 6 = 6</td>
            <td>2 x 7 = 7</td>
            <td>2 x 8 = 8</td>
            <td>2 x 9 = 9</td>
        </tr>
        <tr>
            <td>3 x 1 = 1</td>
            <td>3 x 2 = 2</td>
            <td>3 x 3 = 3</td>
            <td>3 x 4 = 4</td>
            <td>3 x 5 = 5</td>
            <td>3 x 6 = 6</td>
            <td>3 x 7 = 7</td>
            <td>3 x 8 = 8</td>
            <td>3 x 9 = 9</td>
        </tr>

    </table> -->

    <!-- 3. -->
    <table border=1>
        <?php
            for($j=1;$j<=9;$j++){
                echo "<tr>";
                for($i=1;$i<=9;$i++){
                    echo "<td>$i x $j = ". ($i*$j)."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>


    <h2>九九乘法表 交叉呈現</h2>
    <!-- <table border=1>
        <tr>
            <td> </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
            <td>4</td>
            <td>6</td>
            <td>8</td>
            <td>10</td>
            <td>12</td>
            <td>14</td>
            <td>16</td>
            <td>18</td>
        </tr>
    </table> -->

    <table border = 1>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
            for($j=1;$j<=9;$j++){
                echo "<tr>";
                    echo "<td>". $j."</td>";
                for($i=1;$i<=9;$i++){
                    echo "<td>". ($i*$j)."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    

    <h2>九九乘法表 交叉呈現 - 類票價表-1</h2>
    <p>我自己想的</p>
    <table border = 1>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
            for($j=1;$j<=9;$j++){
                echo "<tr>";
                    echo "<td>". $j."</td>";
                for($i=1;$i<=9;$i++){
                    if($i+$j<=10){
                        echo "<td>". ($i*$j)."</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>


    <h2>九九乘法表 交叉呈現 - 類票價表-2</h2>
    <p>我自己想的 也是老師寫法-1</p>
    <table border = 1>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
            for($j=1;$j<=9;$j++){
                echo "<tr>";
                    echo "<td>". $j."</td>";
                for($i=1;$i<=9;$i++){
                    if($i<=$j){
                        echo "<td>". ($i*$j)."</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>

    <h2>九九乘法表 交叉呈現 - 類票價表-3</h2>
    <p>我自己想的 也是老師寫法-2/但數值很奇怪 他沒注意到/我改了是下一個表格</p>
    <table border = 1>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
            for($j=1;$j<=9;$j++){
                echo "<tr>";
                    echo "<td>". $j."</td>";
                for($i=1;$i<=9;$i++){
                    if($i>=$j){
                        echo "<td>". ($i*$j)."</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>

    <h2>九九乘法表 交叉呈現 - 類票價表-4</h2>
    <p>我自己想的</p>
    <!-- 右上方顯示 -->
    <table border = 1>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
        <?php
            for($j=1;$j<=9;$j++){
                echo "<tr>";
                    echo "<td>". $j."</td>";
                for($i=1;$i<=9;$i++){
                    if($i>=$j){
                        echo "<td>". ($i*$j)."</td>";
                    }else{
                        echo "<td> </td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
</body>
</html>