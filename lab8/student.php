<?php
	include 'controller/studentcontroller.php';
	$students=getAllStudents();
?>
	<a href="addstudent.php">Add Student</a><br>
	<h3 class="text">All Students</h3>
	<table class="table table-stripad">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Credit</th>
			<th>CGPA</th>
			<th>Department</th>
		</thead>
		</tbody>
			<?php
				$i=1;
				foreach($students as $s){
					echo "<tr>";
						echo "<td>".$s["userid"]."</td>";
						echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["dob"]."</td>";
						echo "<td>".$s["credit"]."</td>";
						echo "<td>".$s["cgpa"]."</td>";
						echo "<td>".implode("",department($s["dept_id"]))."</td>";
						echo '<td><a href="editstudent.php?id='.$s["id"].'"class="btn btn-success">Edit</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>


			
