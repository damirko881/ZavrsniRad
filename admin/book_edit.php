<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];

		$sql = "UPDATE books SET isbn = '$isbn', title = '$title', category_id = '$category', author = '$author', publisher = '$publisher', publish_date = '$pub_date' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Knjiga je uspješno ažurirana';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Prvo ispunite obrazac za uređivanje';
	}

	header('location:book.php');

?>