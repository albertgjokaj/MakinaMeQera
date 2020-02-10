<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Faqja e Adminit</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Je i sigurt qe do te fshish kete mesazh?")){
				window.location.href ='delete_msg.php?id='+id;
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
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Paneli</a>
			<span>&gt;</span>
			Mesazhet e Klientit
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Mesazhet e Klientit</h2>
						<div class="right">
							<label>Kerko mesazhet</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="Kerko" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Mesazhi</th>
								<th>Koha e dergimit</th>
								<th>Statusi</th>
								<th width="110" class="ac">Kontrollo</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM message";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['message'] ?></a></h3></td>
								<td><?php echo $row['time'] ?></td>
								<td><a href="#"><?php echo $row['status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)" class="ico del">Fshij</a>
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
					
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
	<span class="left">&copy; <?php echo date("Y");?> - Makina Me Qera</span>
	<span class="right">
			</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>