<?php

require_once('database.php');


$name = $_GET['name'];
$time = $_GET['time'];
if(empty($_GET['time'])){
    $time = "ALL";
}

if($time === "ALL"){
    $sql = "SELECT * FROM `parkingdata` 
    WHERE name = ? 
    ORDER BY created_at ASC";
}
else if ($time === "1J"){
    $sql = "SELECT * FROM `parkingdata` 
    WHERE name = ? AND created_at BETWEEN date_sub(now(),INTERVAL 1 YEAR) and now()
    ORDER BY created_at ASC";
}
else if ($time === "1M"){
    $sql = "SELECT * FROM `parkingdata` 
    WHERE name = ? AND created_at BETWEEN date_sub(now(),INTERVAL 1 MONTH) and now()
    ORDER BY created_at ASC";
}
else if ($time === "1W"){
    $sql = "SELECT * FROM `parkingdata` 
    WHERE name = ? AND created_at BETWEEN date_sub(now(),INTERVAL 1 WEEK) and now()
    ORDER BY created_at ASC";
}
else if ($time === "24H"){
    $sql = "SELECT * FROM `parkingdata` 
    WHERE name = ? AND created_at BETWEEN date_sub(now(),INTERVAL 1 DAY) and now()
    ORDER BY created_at ASC";
}

$query = $pdo->prepare($sql);
$query->bindParam(1, $name);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$jsonString = json_encode($result);

header('Content-Type: application/json');

echo $jsonString;
?>