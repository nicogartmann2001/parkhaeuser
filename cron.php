<?php

require_once("database.php");

$url = "https://api.parkendd.de/Zuerich";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response);

foreach($data->lots as $value){
    $sql = "INSERT INTO `parkingdata` (name, free, total) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $value->address);
    $stmt->bindParam(2, $value->free);
    $stmt->bindParam(3, $value->total);
    $stmt->execute();
}