<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сортировка выбором</title>
</head>
<body>
    <?php
        $str = '8,16,4,100,1';
        $array = explode(',', $str);

        include 'sort.php';

        $sorted = selectionSort($array);
        foreach ($sorted as $i) {
            echo "$i ";
        }
    ?>
</body>
</html>