<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Makina me Qera</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Faqja kryesore</a></li>
						<li><a href="index.php">Makina</a></li>
						
						<li><a href="contact.php">Kontakto</a></li>
					
					
					<li><a href="account.php">Logimi i klientit</a></li>
					<li><a href="login.php">Logimi Adminit</a></li>
					</ul>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Faqja kryesore</a></li>
								<li><a href="status.php">Shiko Statusin</a></li>
								<li><a href="message_admin.php">Dergo mesazh admin-it</a></li>
								<li><a href="admin/logout.php">Dil</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>