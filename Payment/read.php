<h1>All  Payment Records:</h1>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM payment" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>payment_id</th> <th>Student_id</th> <th>Amount</th> <th>Date</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $payment_id </td>";
		echo "<td> $student_id </td>";
		echo "<td> $amount </td>";
		echo "<td> $date </td>";
		echo "<td> <a href = 'delete.php?id=$payment_id'> Delete </a> </td>";

		echo "<td> <a href = 'payment_update_input.php?id=$payment_id
		&f0=$payment_id&f1=$student_id&f2=$amount&f3=$date'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=payment_input.php>CREATE a new record</a>";
?>