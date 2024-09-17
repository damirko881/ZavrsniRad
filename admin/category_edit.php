<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

		$sql = "UPDATE category SET name = '$name' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Kategorija je uspješno ažurirana';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Prvo ispunite obrazac za uređivanje';
	}

	header('location:category.php');

?>