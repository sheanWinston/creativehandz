<?php 
	
	include_once '../kurn.php';

	$err = 0;
	$err_msg = '';

	$username = clean('username');
	$email = clean('email');
	$password = clean('password');
	$password = sha1(md5($password));

	$check = $con->query("SELECT email from freelancers where email = '$email' ");
	if ($check->num_rows > 0) {
		$err = 1;
		$err_msg = 'Email Already Exists';
	}

	$check2 = $con->query("SELECT username from freelancers where username = '$username' ");
	if ($check->num_rows > 0) {
		$err = 1;
		$err_msg .= '<br> Username Already Exists';
	}


	if ($err == 0) {
		$insert = $con->query("INSERT INTO freelancers (username, email, password) VALUES ('$username', '$email', '$password' ) ");
		if ($insert === TRUE) {
			header("location: index.php?msg=Account Created Successfully");
		}else{
			$err = 1;
			$err_msg = $con->error;
		}
	}else{
		header("location: index.php?msg=".$err_msg);
	}

 ?>