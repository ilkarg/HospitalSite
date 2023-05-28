<?php

require '../../db.php';

session_start();

if (isset($_POST["login"], $_POST["password"])) {
    $login = $_POST["login"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM users WHERE BINARY login='$login' AND password='$password'";
    $result = $connection->query($query);

    $data_corrected = false;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["login"] == $login && $row["password"] == $password) {
                $_SESSION["user"] = array(
                    "login" => $login,
                    "password" => $password
                );

                echo json_encode([
                    "response" => "Вы успешно вошли в аккаунт"
                ]);
                return;
            }
        }
    }

    echo json_encode([
        "response" => "Неверные логин или пароль"
    ]);
}