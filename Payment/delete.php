 

<?php
 
	$id = $_GET["id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM payment WHERE payment_id=$id" )

		or die("Can not execute query");



	echo "<b>Your Payment Record deleted<b><br>";




	echo "<p><a href=read.php>View  all  Payments</a>";

?>