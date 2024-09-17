<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];

		$sql = "INSERT INTO books (isbn, category_id, title, author, publisher, publish_date) VALUES ('$isbn', '$category', '$title', '$author', '$publisher', '$pub_date')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Knjiga je uspješno dodana';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Prvo ispunite obrazac za dodavanje';
	}

	header('location: book.php');

?>