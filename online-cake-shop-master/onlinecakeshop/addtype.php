<?php
require_once('config.php');
session_start();
$sql ='ALTER TABLE cake_shop_orders ADD type VARCHAR(100) NOT NULL';
	if(mysqli_query($conn,$sql))
	{
		echo "column insert successfully.";
	}
	else
	{
		echo "Sorry, Could not insert column:" .mysql_error($conn);
	}
	mysqli_close($conn);
?>