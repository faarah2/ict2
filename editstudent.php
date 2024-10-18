<?php include ('header.php') ?>

<?php 
    $server = 'localhost';
    $user = 'root';
    $password  = '';
    $database = 'alpha'; 

$mysqli = new mysqli($server,$user,$password,$database)
or die (mysqli_error($mysql ));

$id = $_GET['edit'];
$result = $mysqli->query("SELECT * from students1 where id = '$id'    ")
or die (mysqli_error($mysql ));

$row = $result->fetch_array();
 ?>





<div class="container"  >
	     <center>
	    <h1>Student Management</h1>
	    <h3>Edit Student</h3>

	     </center>


<div class="card mx-auto "  style="width: 50%; box-shadow:0 0 25px 0 lightgrey;">
	<div class="card-body">
		<h4 class="card-title">Edit </h4>
      
      <form method="POST" action="process/process_students.php"  >
      <label>Name</label>
      <input type="text" name="name" class="form-control" required value="<?php echo $row['name'] ?>"  >
       <br>
  <label>Gender</label>
 <select class="form-control" name="gender" required>
   <option value="<?php echo $row['gender'] ?>">  <?php echo $row['gender'] ?></option>
    
   <option value="Male">Male</option>
   <option value="Female">Female</option>
 </select>
<br>

 
<label>Phone</label>
<input type="number" name="phone" class="form-control" required value="<?php echo $row['phone'] ?>">
<br>
<label>Address</label>
<input type="text" name="address" class="form-control" required value="<?php echo $row['address'] ?>">


<br>
<button type="submit" name="update" class="btn btn-info"  >  Update</button>

<a  onclick="history.back();"  href="#"> Back  </a>

</form>





	</div>
	</div>












</div>
<?php include ('footer.php') ?>