<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){
          if ($order === true){
            asort($array);
          } else {
            arsort($array);
          }

          foreach($array as $num){
            echo $num . '<br>';
          }
        }

        $num = [15,4,18,23,10];

        echo '昇順にソートします<br>';
        sort_2way($num, true);

        echo '降順にソートします<br>';
        sort_2way($num, false);
        
        ?>
    </p>
</body>

</html>