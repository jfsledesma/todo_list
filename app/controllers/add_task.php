<?php require_once './connection.php';

$passed = htmlspecialchars($_GET["task"]);

$sql = "INSERT INTO tasks(name) VALUES('$passed')";
$result = mysqli_query($conn,$sql);

// console.log("added $passed");

mysqli_close();

?>