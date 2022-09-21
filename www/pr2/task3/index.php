<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
</head>
<body>
    <h3>Файлы и каталоги на сервере:</h3>
    <p><?php echo shell_exec('cd ../.. && ls') ?></p>
    <h3>Процессы:</h3>
    <p><?php echo shell_exec("ps | awk 'FNR>1 { print $4 }'") ?></p>
    <h3>Пользователь:</h3>
    <p><?php $user = shell_exec("whoami"); echo $user ?></p>
    <p><b>Группы пользователя:</b> <?php echo shell_exec("id -G") ?></p>
</body>
</html>