<?php

$host = "db4free.net";
$username = "jfsledesma";
$password = "spongebob";
$dbname = "todo_app_db_jfsl";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed:' . mysqli_error($conn));
}

// echo 'Connected Successfully';

// mysqli_close($conn);

?>