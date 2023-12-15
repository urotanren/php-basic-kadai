<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        

        function sort_2way($array,$order){

            if($order == TRUE){
                sort($array);
                echo "昇順にソートします。";
                echo "<br>";
                foreach($array as $key => $value){
                    echo "{$value}<br>";
                };
            }elseif($order == FALSE){
                rsort($array);
                echo "降順にソートします。";
                echo "<br>";
                foreach($array as $key => $value){
                    echo "{$value}<br>";
                };
            };
        };

        $array = [15,4,18,23,10];


        sort_2way($array,TRUE);
        sort_2way($array,FALSE);
        ?>
    </p>
</body>

</html>
