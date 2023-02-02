<?php
	session_start();
	error_reporting(0)
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Losantos Car Rental System</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						
						<li><a href="contact.php">Contact</a></li>
					
					
					<li><a href="account.php">Client Login</a></li>
					<li><a href="login.php">Admin Login</a></li>
					</ul>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
								<li><a href="admin/logout.php">Logout</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>