<?php require_once 'controllers/connection.php'

$name = $_POST("task");

$sql = "INSERT INTO tasks('name') VALUES($name)"




?>