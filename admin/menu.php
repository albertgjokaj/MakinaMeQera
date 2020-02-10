<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Makina Me Qera</a></h1>
			<div id="top-navigation">
				Mire Se Erdhe <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				
				<a href="logout.php">Dil</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Paneli</span></a></li>
			    <li><a href="add_vehicles.php"><span>Menaxhimi i Makinave</span></a></li>
			    <li><a href="client_requests.php"><span>Kerkesat Per Qera</span></a></li>
			    <li><a href="index.php"><span>Mesazhet</span></a></li>
			   
			</ul>
		</div>