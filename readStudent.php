<?php
	require_once('dbStudent_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM student" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>dept</th> <th>batch</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $dept </td>";
		echo "<td> $batch </td>";
		echo "<td> <a href = 'deleteStudent.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'updateStudent_input.php?id=$id&dept=$dept&batch=$batch'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=createStudent_input.php>CREATE a new record</a>";
?>