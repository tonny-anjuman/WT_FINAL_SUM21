<?php
	$id = $_GET["id"];
    include 'controller/studentcontroller.php';
    $s = getStudent($id);
?>
<form method="POST">
	<h4 class="text">ID:</h4>
	<input type="text" name="userid" value="<?php echo $s["userid"]?>">
	<h4 class="text">Name:</h4>
	<input type="text" name="name" value="<?php echo $s["name"]?>">
	<h4 class="text">Date of Birth:</h4>
	<input type="text" name="dob" value="<?php echo $s["dob"]?>">
	<h4 class="text">Credit:</h4>
	<input type="text" name="credit" value="<?php echo $s["credit"]?>">
	<h4 class="text">CGPA:</h4>
	<input type="text" name="cgpa" value="<?php echo $s["cgpa"]?>">
	<h4 class="text">Department:</h4>
	<input type="text" name="dept_id" value="<?php echo $s["dept_id"]?>">
	<input type="submit" name="btn_editstudent" class="btn btn-success" value="Edit Student">
</form>
