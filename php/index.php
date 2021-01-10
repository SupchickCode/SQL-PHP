<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST TASK</title>
</head>

<body>
    <?php
    
    session_start();

    if ($_SESSION['response']) {
        $response =  json_decode($_SESSION['response'],true);

        # REMOVE SESSION AFTER GOT RESPONSE 
        unset($_SESSION['response']);

        if ($response["status"] == 'success') {
            echo 'Авторизация успешна!';
        } elseif($response["status"] == 'error') {
            echo 'Ошибка авторизации';
        }
    } else { ?>
        <form action="login.php" method="POST">
            <input type="text" name="login"><br>
            <input type="password" name="password"><br>
            <button type="submit">Login</button>
        </form>
    <?php } ?>
</body>

</html>