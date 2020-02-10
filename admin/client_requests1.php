<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Faqja e Adminit</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Je i sigurt se do e pranosh kete kerkese?")){
				window.location.href ='approve.php?id='+id;
			}
		}
		function sureToApprove1(id){
			if(confirm("Je i sigurt qe do te fshish kete kerkese?")){
				window.location.href ='delete.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Paneli</a>
			<span>&gt;</span>
			Kerkesat e Klientit
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Kerkesat e Klientit</h2>
						<div class="right">
							<label>kerko</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="kerko" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Emri Klientit</th>
								<th>Numri</th>
								<th>Makina e Rezervuar</th>
								<th>Cmimi</th>
								<th>Statusi</th>
								<th width="110" class="ac">Kontrolli</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT client.client_id,client.fname,client.phone,cars.car_name,cars.hire_cost,client.status 
										FROM client JOIN cars ON client.car_id=cars.car_id";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['fname'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['phone'] ?></a></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								<td><a href="#"><?php echo $row['status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['client_id'];?>)" class="ico del">Prano</a>
									<a href="javascript:sureToApprove1(<?php echo $row['client_id'];?>)" class="ico edit">Fshij</a>
								</td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Jepen 1-12 nga 44</div>
							<div class="right">
								<a href="#">Para</a>
								<a href="#">1</a>
								<a href="#">2</a>
								
								<span>...</span>
								<a href="#">Tjetra</a>
								<a href="#">Shiko te Gjitha</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Printo" /></h2>
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
	<span class="left">&copy; <?php echo date("Y");?> - Makina me Qera</span>
	<span class="right">
			</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>