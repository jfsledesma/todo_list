<?php require_once './connection.php';

$delid = $_GET["idnum"];

$sql = "DELETE FROM finished WHERE id=$delid";
$result = mysqli_query($conn,$sql);

// console.log("added $passed");

mysqli_close();

?>