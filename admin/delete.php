<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM client WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Kerkesa u fshi';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
