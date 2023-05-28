<?php

require '../../db.php';

if (isset(
    $_POST["date"], 
    $_POST["time"],
    $_POST["complaints"],
    $_POST["fio"],
    $_POST["phone"],
    $_POST["email"]
)) {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $complaints = $_POST["complaints"];
    $fio = $_POST["fio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $query = "INSERT INTO appointments (`date`, `time`, `complaints`, `fio`, `phone`, `email`) VALUES ('$date', '$time', '$complaints', '$fio', '$phone', '$email')";
    $result = $connection->query($query);

    if ($result) {
        echo json_encode([
            "response" => "Вы успешно записались к врачу. С вами свяжутся в ближайшее время, ожидайте"
        ]);
    }
}