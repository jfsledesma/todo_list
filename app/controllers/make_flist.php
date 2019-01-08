<?php 

require_once "connection.php";

$sql = "SELECT id,name FROM finished";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<p class='panel-block list_item' id='" . $row["id"] . "'>" . $row["name"] . "<a class='trasherf button'><span class='icon'><i class='fas fa-trash-alt'></i></span></a></p>";
	}
} else {
    echo "<p class='panel-block'>You have no finished tasks</p>";
};
?>