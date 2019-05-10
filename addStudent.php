<?php include 'inc/header.php'; ?>

<div class="panel-heading">
    <h2>AddStudent<a class="pull-right" href="index.php">Back</a></h2>
</div>

<div class="panel-body">
	<form action="process_student.php" method="post">
		<div class="form-group">
			<label for="name">Student Name</label>
			<input type="text" class="form-control" name="name" id="name" required="1">
		</div>
         

        <div class="form-group">
			<label for="email">Student Email</label>
			<input type="text" class="form-control" name="email" id="email" required="1">
		</div>


		<div class="form-group">
			<label for="phone">Student Phone</label>
			<input type="text" class="form-control" name="phone" id="phone" required="1">
		</div>


		<div class="form-group">
			<input type="hidden" name="action" value="Add">
			<input type="submit" class="btn btn-primary" name="submit" value="Add Student">
		</div>


	</form>
</div>

<?php include 'inc/footer.php'; ?>
