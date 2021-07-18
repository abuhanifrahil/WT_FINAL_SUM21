<?php
include 'controllers/student_controllers.php';
$student = getAllstudent();

?>


<div class ="center">
<h3 class="text">All student</h3>
<table class="table table-striped">
<thead>
<th>Name</th>
<th>ID</th>
<th>DOB</th>
<th>Credit</th>
<th>CGPA</th>
<th>Dept_id</th>
<th>Dept_name</th>

</thead>
<tbody>
<?php
$i = 1;
foreach ($student as $s){
	echo"<tr>";
	echo "<td>$i</td>";
	echo "<td>".$s["name"]."</td>";
	echo "<td>".$s["id"]."</td>";
	echo "<td>".$s["dob"]."</td>";
	echo "<td>".$s["credit"]."</td>";
	echo "<td>".$s["dob"]."</td>";
	echo "<td>".$s["dept_id"]."</td>";
	echo "<td>".$s["dept_name"]."</td>";
	echo '<td><a href="Editcategory.php" class="btn btn-success">Edit</td>';
	echo '<td><a class="btn btn-danger">Delete</td>';
	echo"</tr>";
	$i++;


}
?>



</tbody>
</table>
</div>