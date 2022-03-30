<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$course_id = validate($_POST['course_id']);
    $dept = validate($_POST['dept']);
	$title = validate($_POST['title']);
    $credit = validate($_POST['credit']);
    $sylb = validate($_POST['sylb']);

	$user_data = 'course_id='.$course_id. '&dept='.$dept.   '&title='.$title. '&credit='.$credit. '&sylb='.$sylb;

	if (empty($course_id)) {
		header("Location: ../index.php?error=Course Id is required&$user_data");
	}else if (empty($dept)) {
		header("Location: ../index.php?error=Department is required&$user_data");    
	}else if (empty($title)) {
		header("Location: ../index.php?error=Course Title is required&$user_data");    
	}else if (empty($credit)) {
		header("Location: ../index.php?error=Course Credit is required&$user_data");    
	}else if (empty($sylb)) {
		header("Location: ../index.php?error=Syllabus is required&$user_data");    
	}else {

       $sql = "INSERT INTO course(course_id, dept, title, credit, sylb)VALUES('$course_id', '$dept', '$title', '$credit', '$sylb')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}