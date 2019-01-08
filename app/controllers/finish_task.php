<?php require_once './connection.php';

$delid = $_GET["idnum"];

$sql = "INSERT INTO finished(name) SELECT tasks.name FROM tasks WHERE tasks.id=$delid";
$result = mysqli_query($conn,$sql);
$sql2 = "DELETE FROM tasks WHERE id=$delid";
$result2 = mysqli_query($conn,$sql2);
// $result = mysqli_query($conn,$sql);

// console.log("added $passed");

mysqli_close();

?>