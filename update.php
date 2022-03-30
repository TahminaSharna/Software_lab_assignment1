<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Course</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update Course</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
            
		   
            <div class="form-group">
		     <label for="course_id">Course Id</label>
		     <input type="course_id" 
		           class="form-control" 
		           id="course_id" 
		           name="course_id" 
		           value="<?php if(isset($_GET['course_id']))
		                           echo($_GET['course_id']); ?>" 
		           placeholder="Enter Course ID">
		   </div>

		   <div class="form-group">
		     <label for="dept">Department</label>
		     <input type="dept" 
		           class="form-control" 
		           id="dept" 
		           name="dept" 
		           value="<?php if(isset($_GET['dept']))
		                           echo($_GET['dept']); ?>"
		           placeholder="Enter Department">
		   </div>
            
            <div class="form-group">
		     <label for="title">Course Title</label>
		     <input type="title" 
		           class="form-control" 
		           id="title" 
		           name="title" 
		           value="<?php if(isset($_GET['title']))
		                           echo($_GET['title']); ?>"
		           placeholder="Enter Course Title">
		   </div>
            
            <div class="form-group">
		     <label for="title">Course Credit</label>
		     <input type="credit" 
		           class="form-control" 
		           id="credit" 
		           name="credit" 
		           value="<?php if(isset($_GET['credit']))
		                           echo($_GET['credit']); ?>"
		           placeholder="Enter Course Credit">
		   </div>
            
            <div class="form-group">
		     <label for="title">Syllabus</label>
		     <input type="sylb" 
		           class="form-control" 
		           id="sylb" 
		           name="sylb" 
		           value="<?php if(isset($_GET['sylb']))
		                           echo($_GET['sylb']); ?>"
		           placeholder="Enter Course Syllabus">
		   </div>
            
            
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
            <a href="read.php" class="btn btn-secondary">View</a>
	    </form>
	</div>
</body>
</html>