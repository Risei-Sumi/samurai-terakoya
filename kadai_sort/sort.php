<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way(&$array, $order) {
            if ($order === TRUE) {  
               sort($array);
            } else {         
               rsort($array);
            }
        }

        $numbers = [10, 4, 23, 18, 15];
        // 昇順にソート
        sort_2way($numbers, TRUE);
        echo "昇順にソートします。<br>";
        foreach ($numbers as $number) { 
           echo $number . "<br>";
        }

        $numbers = [10, 4, 23, 18, 15];
        // 降順にソート
        sort_2way($numbers, FALSE);
        echo "降順にソートします。<br>";
        foreach ($numbers as $number) { 
        echo $number . "<br>";
        }
        ?>
    </p>
</body>

</html>
