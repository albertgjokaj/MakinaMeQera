<!DOCTYPE html>
<html lang="en">
<head>
	<title>Makina me Qera</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
			<h2 class="caption" style="text-align: center"><i>Merr makinen tende te preferuar me qera!</i></h2>
			<h3 class="properties" style="text-align: center">Mercedes Benz - Toyota - Range Rovers</h3>
			</section>
	</section><!--  end hero section  -->
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Leke.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Modeli Makines>'.$rws['car_type'];?></a>
						</h1>
						<h2>Emri/Modeli Makines: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
				<h3>Merr me qera <?php echo $rws['car_name'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table>
						<tr>
							<td>Emri/Mbiemri:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Numri i tel:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>ID:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Gjinia:</td>
							<td>
								<select name="gender">
									<option> Zgjidh Gjinine </option>
									<option> Mashkull </option>
									<option> Femer </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Adresa:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Dergo te dhenat"></td>
						</tr>
					</table>
				</form>
				<?php
					} else
						{
							?>
								<a href="pay.php">Kliko te Rezervosh</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Regjistrimi i Suksesshem. Vazhdo Pagesen\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Regjistirmi Deshtoi. Provo Perseri\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>KOMPANIA JONE</li>
						<li><a href="#">Per ne</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Kontakto</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>Modelet e makinave tona</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Kompania jep makina lukzose me qera me cmimet me te uleta ne treg.</p>
					<ul>
						<li><a href="http://facebook.com/makinameqera/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

	</footer><!--  end footer  -->
	
</body>
</html>