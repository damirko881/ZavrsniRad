<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "UPDATE students SET photo = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Fotografija studenta uspješno je ažurirana';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Prvo odaberite studenta za ažuriranje fotografije';
	}

	header('location: student.php');
?>