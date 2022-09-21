<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drawer</title>
</head>
<body>
    <?php
        if (!array_key_exists('num', $_GET)) {
            echo "Нет номера фигуры";
            return;
        }

        echo '<svg width="400" height="400">';
        
        $num = $_GET['num'];

        include './shapes.php';
        echo $shapes[$num];

        echo '</svg>';
    ?> 
</body>
</html>