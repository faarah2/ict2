<?php include ('header.php') ?>


<?php 
    $server = 'localhost';
    $user = 'root';
    $password  = '';
    $database = 'alpha'; 

$mysqli = new mysqli($server,$user,$password,$database)
or die (mysqli_error($mysql ));

$result = $mysqli->query("SELECT * from students1")
or die (mysqli_error($mysql ));


 ?>



<div   class="container">
	<center>
		<h1>Student Management</h1>
		<h3>View Students</h3>
	</center>

<a style="width: 100px;" class="btn btn-info rounded-pill" href="addstudent.php"> Add </a>
<br><br>

	<table id="mytable" class="table table-bordered table-stripped">
		<thead>
			<tr  class="bg-info text-light" >
				<th>ID</th>
				<th>NAME</th>
				<th>Gender</th>
 				<th>Phone</th>
				<th>Address </th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = $result->fetch_assoc() ): ?>	 
<tr>
	<td> <?php echo $row['id'] ?>  </td>
	<td> <?php echo $row['name'] ?>  </td>
	<td> <?php echo $row['gender'] ?>  </td>
	<td> <?php echo $row['phone'] ?>  </td>
	<td> <?php echo $row['address'] ?>  </td>
	<td> 
<a  class="btn btn-info" href="editstudent.php?edit=<?php echo $row['id'] ?>">Edit  </a>

<a class="btn btn-danger" 
onclick="return confirm('Are you sure you want to delete this record?')"

  href="process/process_students.php?delete=<?php echo $row['id'] ?>">  Delete  </a>


	  </td>
</tr>
<?php endwhile;    ?>
		</tbody>
		<tfoot>
			<tr class="bg-secondary ">
				<td colspan="6"></td>
			</tr>
		</tfoot>
	</table>

<script type="text/javascript">
	$(document).ready( function () {
    $('#mytable').DataTable();
} );
</script>

</div>

<?php include ('footer.php') ?>