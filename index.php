<?php 

    include 'inc/header.php'; 
    include 'lib/Database.php'; 


?>

     	
        	<div class="panel-heading">
        		<h2>Student Data <a class="center" href="addStudent.php">Add Student Data</a></h2>
        	</div>

        <div class="panel-body">	
            
     		<table class="table-striped">
     			<tr>
     				<td>Serial</td>
     				<td>Name</td>
     				<th>Email</th>
     				<th>Phone</th>
     				<th>Action</th>
     			</tr>


                

                <?php
                   
                    $db = new Database();
                    $table = "tbl_student";
                    $order_by = array('order_by' => 'id DESC');
                    $data = $db->select($table, $order_by);


                ?>   




                <tr>
                	<td>01</td>
                	<td>Mohammad Arfat</td>
                	<td>arfat@gmail.com</td>
                	<td>01991235471</td>
                	<td>
                		<a class="btn btn-default" href="editstudent.php?id=1">Edit</a>
                		<a class="btn btn-danger" href="deletestudent.php?id=1" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                	</td>
                </tr>




     		</table>

     	</div>	



     	
<?php include 'inc/footer.php'; ?>
     	

