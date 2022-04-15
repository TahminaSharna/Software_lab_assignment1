<?php

	 

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

	$f3 = $_GET["f3"];

?>



<h1>Update Record </h1>



<form method=get action=payment_update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	Payment Id: <input type=text name=f0 value='<?php echo $f0; ?>'>

	<p>

	Student Id: <input type=text name=f1 value='<?php echo $f1; ?>'>

	<p>

	Amount : <input type=text name=f2 value='<?php echo $f2; ?>'>

<p>
	Date: <input type=text name=f3 value='<?php echo $f3; ?>'>

<p>

	<input type=submit value=Update>

</form>