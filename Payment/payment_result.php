<?php

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

	$f3 = $_GET["f3"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO payment VALUES ( '$f0', '$f1', '$f2', '$f3' )" )

		or die("Can not execute query");



	echo " <b> Your payment has done : <b>
	<br>
	<br>Payment ID   = $f0<br>
	<br>Student ID   = $f1<br>
	<br>Amount      = $f2 <br>
	<br>Payment_Date= $f3<br>";



	echo "<p>  <a href=read.php><b>View all payments<b></a>";

?>