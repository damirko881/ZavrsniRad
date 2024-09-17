<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		
		$sql = "INSERT INTO category (name) VALUES ('$name')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Kategorija je uspješno dodana';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Prvo ispunite obrazac za dodavanje';
	}

	header('location: category.php');

?>