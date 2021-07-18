<?php
	include 'controller/UserControllers.php';
?>
<html>
	<body>
		<h1 class="text text-center">Login</h1>
    <h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<table>
			<tr>
				<td>User Name:</td>
				<td><input type ="text" name="uname" ></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type ="text" name="pass" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn_login" value="log In"></td>
			</tr>
		</table>
	</form>
	</body>
</html>




