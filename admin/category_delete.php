<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM category WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Kategorija je uspješno izbrisana';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Najprije odaberite stavku za brisanje';
	}

	header('location: category.php');
	
?>