<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$code = $_POST['code'];
		$title = $_POST['title'];

		$sql = "UPDATE course SET code = '$code', title = '$title' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Smjer je uspješno ažuriran';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Prvo ispunite obrazac za uređivanje';
	}

	header('location:course.php');

?>