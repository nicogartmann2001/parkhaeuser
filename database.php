<?php

require_once("config.php");

$pdo = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD); 