<?php

require_once('database.php');

$sql = "SELECT name, free, total
        FROM `parkingdata`
        WHERE id IN(
                        SELECT MAX(id)
                        FROM `parkingdata`
                        GROUP BY NAME
                        )
                        ORDER BY total DESC
                        LIMIT 10";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$jsonString = json_encode($result);

header('Content-Type: application/json');

echo $jsonString;
?>