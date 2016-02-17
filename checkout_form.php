<?php 

<form action= "cart_process.php">
	<text type="">
	


</form>
session_start();
echo session_id ();

$res = mysqli_query($connection, "select * from cart where session_id = '" . session_id() . "'");




 
if ($SESSION["id"] ==""){

$SESSION["id"] = rand(0,10000);
}

?>