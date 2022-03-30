<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM course WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$course_id = validate($_POST['course_id']);
    $title = validate($_POST['dept']);
	$title = validate($_POST['title']);
    $credit = validate($_POST['credit']);
    $sylb = validate($_POST['sylb']);
	$id = validate($_POST['id']);

	if (empty($course_id)) {
		header("Location: ../update.php?error=Course Id is required&$user_data");
	}else if (empty($dept)) {
		header("Location: ../update.php?error=Department is required&$user_data");    
	}else if (empty($title)) {
		header("Location: ../update.php?error=Course Title is required&$user_data");    
	}else if (empty($credit)) {
		header("Location: ../update.php?error=Course Credit is required&$user_data");    
	}else if (empty($sylb)) {
		header("Location: ../update.php?error=Syllabus is required&$user_data");    
	}else {

       $sql = "UPDATE course
               SET course_id='$course_id', dept='$dept', title='$title', credit='$credit', sylb='$sylb'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}