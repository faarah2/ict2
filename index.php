<?php include ('header.php') ?>
<?php 
    $server = 'localhost';
    $user = 'root';
    $password  = '';
    $database = 'alpha'; 

$mysql = new mysqli($server,$user,$password,$database)
or die (mysqli_error($mysql ));
if (mysqli_connect_error()) {
    echo "Not connected: " ;
} else {
    echo "Connected";
}



 ?>





<h1>asdf</h1>



<?php include ('footer.php') ?>

