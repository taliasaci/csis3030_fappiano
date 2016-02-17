<?php

include("global.php");
include("header.php");

$category_id = intval($_GET["category_id"]);
$result = mysqli_query($connection,"select * from products where category_id = $category_id order by product_name");

$row = mysqli_fetch_assoc($result)
	echo $row["product_name"];
	echo "<br /> < br />";
if ($_GET["product_id"])
	header("Location: product_detail.php");

$result = mysqli_query($connection, "select * from categories where id = $category_id order by product_name");
while($row = mysqli_fetch_assoc($result)) {
	echo $row["product_name"] . "<br />";
	echo $row["description"] . "<br />";
	echo $row["<img src='img/"] . $row["image"] . "<br /> <br />";
}

include("footer.php"); 


?>


