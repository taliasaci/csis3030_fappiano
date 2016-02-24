<?php 

session_start();
echo session_id ();

$res = mysqli_query($connection, "select * from products where session_id = '" . session_id() . "'");

<form method="GET"> 
<input type="text" name="product_1" size="3">

</form>
 
if ($SESSION["id"] ==""){

$SESSION["id"] = rand(0,10000);
}

?>