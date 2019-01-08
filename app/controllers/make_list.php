<?php 

require_once "connection.php";

$sql = "SELECT id,name FROM tasks";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<p class='panel-block list_item' id='" . $row["id"] . "'>" . $row["name"] . " " . "<a class='checker button has-text-success is-borderless'><span class='icon'><i class='fas fa-check'></i></span></a>" . " " . "<a class='trasher button has-text-danger is-borderless'><span class='icon'><i class='fas fa-trash-alt'></i></span></a></p>";
	}
} else {
    echo "<p class='panel-block'>You have no tasks</p>";
};
?>