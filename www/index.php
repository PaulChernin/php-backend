<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 2</title>
</head>
<body>
    <ul>
        <?php
            for ($i = 1; $i <= 2; $i++) {
                echo "<li><a href=\"/pr$i\">Практика $i</a></li>";
            }
        ?>
    </ul>
</body>
</html>