<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'e Pranuar' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'U pranua';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
