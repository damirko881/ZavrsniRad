<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM course WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Smjer je uspješno izbrisan';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Najprije odaberite stavku za brisanje';
	}

	header('location: course.php');
	
?>