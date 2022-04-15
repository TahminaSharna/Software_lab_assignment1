<?php

	$id = $_GET["id"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

	$f3 = $_GET["f3"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE payment SET  payment_id='$f0', student_id='$f1', amount='$f2', date='$f3' WHERE payment_id = $f0";

	



	mysqli_query( $connect, $query )

		or die("Can not execute -.query");



	//echo "<p>Record updated:<br> f0 = $f0 <br> f1 = $f1 <br> f2 = $f2 <br> f3 = $f3";

	echo " <b> Your payment has updated : <b>
	<br>
	<br>Payment ID   = $f0<br>
	<br>Student ID   = $f1<br>
	<br>Amount      = $f2 <br>
	<br>Payment_Date= $f3<br>";



	echo "<p><a href=read.php>View  all   payments</a>";

?>