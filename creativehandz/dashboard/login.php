<?php 
	
	include_once 'kurn.php';

	$email = clean('email');
	$password = clean('password');
	$password = sha1(md5($password));

	$login = $con->query("SELECT * from freelancers where email = '$email' and password = '$password' ");
	if ($login->num_rows == 1) {
		$sidd = $login->fetch_assoc();
		$_SESSION['usid'] = $sidd['freeId'];
		header("location: free.php");
	}else{
		header("location: index.php?msg=Invalid Details ");
	}

 ?>