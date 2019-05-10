<?php include 'inc/header.php'; ?>

<div class="panel-heading">
    <h2>Update Student<a class="pull-right" href="index.php">Back</a></h2>
</div>

<div class="panel-body">
	<form action="process_student.php" method="post">
		<div class="form-group">
			<label for="name">Student Name</label>
			<input type="text" class="form-control" name="name" id="name" required="1" value="Mohammad Arfat">
		</div>
         

        <div class="form-group">
			<label for="email">Student Email</label>
			<input type="text" class="form-control" name="email" id="email" required="1" value="arfat@gmail.com">
		</div>


		<div class="form-group">
			<label for="phone">Student Phone</label>
			<input type="text" class="form-control" name="phone" id="phone" required="1" value="01991235471">
		</div>


		<div class="form-group">
			<input type="hidden" name="id" value="1">
			<input type="hidden" name="action" value="edit">
			<input type="submit" class="btn btn-primary" name="submit" value="Update Student">
		</div>


	</form>
</div>

<?php include 'inc/footer.php'; ?>
