<?php include ('header.php') ?>
<div class="container"  >
       <center>
      <h1>Student Management</h1>
      <h3>Login to the Database</h3>

       </center>


<div class="card mx-auto "  style="width: 50%; box-shadow:0 0 25px 0 lightgrey;">
  <div class="card-body">
    <h4 class="card-title">Login </h4>
      
      <form method="POST" action="process/process_students.php"  >
      <label>Username</label>
      <input type="text" name="username" class="form-control" required>
       <br>
 
<label>Password</label>
<input type="password" name="password" class="form-control" required>


<br>
<button type="submit" name="login" class="btn btn-info"  >  Login</button>

 

</form>





  </div>
  </div>












</div>
<?php include ('footer.php') ?>