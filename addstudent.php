<?php include ('header.php') ?>
<div class="container"  >
	     <center>
	    <h1>Student Management</h1>
	    <h3>Add Student</h3>

	     </center>


<div class="card mx-auto "  style="width: 50%; box-shadow:0 0 25px 0 lightgrey;">
	<div class="card-body">
		<h4 class="card-title">Add </h4>
      
      <form method="POST" action="process/process_students.php"  >
      <label>Name</label>
      <input type="text" name="name" class="form-control" required>
       <br>
  <label>Gender</label>
 <select class="form-control" name="gender" required>
   <option value="">Select</option>
   <option value="Male">Male</option>
   <option value="Female">Female</option>
 </select>
<br>

 
<label>Phone</label>
<input type="number" name="phone" class="form-control" required>
<br>
<label>Address</label>
<input type="text" name="address" class="form-control" required>


<br>
<button type="submit" name="save" class="btn btn-info"  >  Save</button>

<a  onclick="history.back();"  href="#"> Back  </a>

</form>





	</div>
	</div>












</div>
<?php include ('footer.php') ?>