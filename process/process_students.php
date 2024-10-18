<?php 
 $server = 'localhost';
    $user = 'root';
    $password  = '';
    $database = 'alpha'; 

$mysqli = new mysqli($server,$user,$password,$database)
or die (mysqli_error($mysqli ));

//============= Delete  
if(isset($_GET['delete']) ){

    $id =  $_GET['delete'];
    $mysqli->query(" 
        DELETE from students1 where id = '$id'
        ") or die (mysqli_error($mysqli));
    header('location: ../viewstudents.php');
}
//============= End Delete 


if ( isset($_POST['save']) )
 {

 	$name = $_POST['name'];
 	 $gender = $_POST['gender'];
 	// $class = $_POST['class'];
 	 $phone = $_POST['phone'];
 	 $address = $_POST['address'];
      

     $mysqli->query(" 
     INSERT INTO STUDENTS1 
     (name, gender,   phone, address)
     values 
     ( '$name',  '$gender',  '$phone' , '$address '    ) ") 
     or die (mysqli_error($mysqli ));

	

}










 ?>