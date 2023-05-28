<?php

require '../../db.php';

$query = "SELECT * FROM appointments";
$result = $connection->query($query);
$data = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data, $row);
    }
}

echo json_encode(
    [
        "data" => $data
    ]);