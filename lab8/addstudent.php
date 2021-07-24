<?php
    include 'controller/studentcontroller.php';
?>

<form method="POST" clss="form-horizontal form-material">
	<h4 class="text">ID:</h4>
	<input type="text" name="userid" value="<?php echo $userid?>">
	<span><?php echo $err_userid;?></span>
	<h4 class="text">Name:</h4>
	<input type="text" name="name" value="<?php echo $name?>">
	<span><?php echo $err_name;?></span>
	<h4 class="text">Date of Birth:</h4>
	<input type="text" name="dob" value="<?php echo $dob?>">
	<span><?php echo $err_dob;?></span>
	<h4 class="text">Credit:</h4>
	<input type="text" name="credit" value="<?php echo $credit?>">
	<span><?php echo $err_credit;?></span>
	<h4 class="text">CGPA:</h4>
	<input type="text" name="cgpa" value="<?php echo $cgpa?>">
	<span><?php echo $err_cgpa;?></span>
	<h4 class="text">Department:</h4>
	<input type="text" name="dept_id" value="<?php echo $dept_id?>">
	<span><?php echo $err_dept_id;?></span>
	<input type="submit" name="btn_addstudent" class="btn btn-success" value="Add Student">
</form>
</div>
