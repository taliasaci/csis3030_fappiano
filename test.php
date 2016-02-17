<?php 

//cart_process.php
//loop over variables
include ("global.php");

foreach ($_POST as $product_field, $quantity) {
	$pattern = "/product\_([0-9]+)/";
	
	if (preg_match_all($pattern, $product_field, $matches)) {
		$product_id = $matches [1](0);
		echo "Found a product of $product_id with a quantity of $quantity";
	}
}
if ($_POST["checkout"]) | | $_POST ["update_cart"]) {
	mysqli_query($connection, "delete from cart where session_id = '$session_id' and product_id = $product_id ");
}

if (mysqli_num_rows($result) !=0) {
	$row = mysqli_fetch_assoc($result;
	$quantity = $quantity + $row["quantity"];
	mysqli_query($connection, "update cart set quantity = $quantity where session_id = '$session_id' and product_id = $product_id")

}else{
	mysqli_query($connection, "insert into cart (session_id, product_id, quantity) values ")
}


//
session_start();
echo session_id ();

$res = mysqli_query($connection, "select * from cart where session_id = '" . session_id() . "'");




 
if ($SESSION["id"] ==""){

$SESSION["id"] = rand(0,10000);
}

?>