<?php 
	
	include_once 'kurn.php';
	$usid = '';
	if (!isset($_SESSION['usid'])) {
		echo "<script type='text/javascript'>alert('Please Login');
			window.location.href = 'login/';
			</script>";
	}else{
		$usid = $_SESSION['usid'];
	}

	$check = $con->query("SELECT * FROM freelancers WHERE freeId = '$usid'  ");

	if ($check->num_rows == 1) {
		$user = $check->fetch_assoc();
	}

 ?>