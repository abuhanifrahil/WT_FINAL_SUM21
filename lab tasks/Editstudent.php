

<?php
include 'controllers/student_controllers.php';
?>
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
<input type="text" name="dept_id" value="<?php echo $dept_id;?>" class="form-control">
<span class="text-danger"><?php echo $err_dept_id;?></span>
</div>
<div class="form-group">
<h4 class="text">dept_name:</h4>
<input type="text" name="dept_name" value="<?php echo $dept_name;?>" class="form-control">
<span class="text-danger"><?php echo $err_dept_name;?></span>
</div>
<div class="form-group text-center">
<input type="submit" name="Editstudent" class="btn btn-success" value="Editstudent" class="form-control">
</div>