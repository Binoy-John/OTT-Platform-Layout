<?php
	$usern = $_POST['usern'];
	$cid = $_POST['cid'];
	$comment = $_POST['comment'];

	// Database connection
	$conn = new mysqli('localhost','root','ghghghgh','biggdogg');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into watchlist(usern, cid, comment) values(?, ?, ?)");
		$stmt->bind_param("sss", $usern, $cid, $comment);
		$execval = $stmt->execute();
		echo $execval;
		echo "Comment added!.....";
		$stmt->close();
		$conn->close();
	}
?>