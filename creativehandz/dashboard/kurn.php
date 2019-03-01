<?php 

$con = new mysqli('localhost', 'root', '', 'creativehandx'); 
session_start();

 
  function clean($x){
	$con = new mysqli('localhost', 'root', '', 'creativehandx'); 
  	$x = trim(strip_tags($_POST[$x]));
 	$x = mysqli_real_escape_string($con, $x);
return $x;
}





 ?>

