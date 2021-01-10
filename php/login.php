<?php

session_start();
require_once('connection.php');
$TABLE_NAME = 'user';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login']) && isset($_POST['password'])) {

    // Get clean data from post request
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $sql_get_user = "SELECT * FROM `$TABLE_NAME` WHERE login = '$login' AND password = '$password'";

    foreach ($conn->query($sql_get_user) as $user) {
        $_SESSION['response'] = json_encode([
            'status' => 'success'
        ]);

        return header("Location: /");
    }

    $_SESSION['response'] = json_encode([
        'status' => 'error'
    ]);

    return header("Location: /");
}
