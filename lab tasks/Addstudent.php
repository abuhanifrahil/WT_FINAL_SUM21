<?php
include 'controllers/student_controllers.php';
?>

<div class="center">
<h5 class= "text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">
<div class="form-group">
<h4 class="text">Name:</h4>
<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
<span class="text-danger"><?php echo $err_name;?></span>
</div>
<div class="form-group">
<h4 class="text">dob:</h4>
<input type="text" name="dob" value="<?php echo $dob;?>" class="form-control">
<span class="text-danger"><?php echo $err_dob;?></span>
</div>
<div class="form-group">
<h4 class="text">credit:</h4>
<input type="text" name="credit" value="<?php echo $credit;?>" class="form-control">
<span class="text-danger"><?php echo $err_credit;?></span>
</div>
<div class="form-group">
<h4 class="text">cgpa:</h4>
<input type="text" name="cgpa" value="<?php echo $cgpa;?>" class="form-control">
<span class="text-danger"><?php echo $err_cgpa;?></span>
</div>
<div class="form-group">
<h4 class="text">dept_id:</h4>
<input type="text" name="dept" value="<?php echo $dept;?>" class="form-control">
<span class="text-danger"><?php echo $err_dept;?></span>
</div>
<div class="form-group text-center">
<input type="submit" name="Addstudent" class="btn btn-success" value="Addstudent" class="form-control">
</div>