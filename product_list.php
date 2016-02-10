<?php
include ("global.php");
include ("header.php");

$category_id = intval($_GET["category_id"]);

$result = mysqli_query($connection, "select * from categories where id = $category_id");
$row = mysqli_fetch_assoc($result)
	echo $row["category_name"];
	echo "<br /> < br />";
	
$result = mysqli_query($connection, "select * from categories where id = $category_id");
while($row = mysqli_fetch_assoc($result)) {
	echo $row["product_name"] . <br />;
	echo $row["description"] . <br />;
	echo $row["<img src='img/"] . $row["image"] . <br /> <br />";

include ("footer.php");

?>