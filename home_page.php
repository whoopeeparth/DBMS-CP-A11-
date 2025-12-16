<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to SEDA Airlines
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title" style="color:orange">
			SEDA AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text" style="color:white">Welcome to SEDA Airlines!</div>
			<img src="images/shutterstock_11.jpg" width=100%>
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
		<!-- ==========FOOTER=========== -->
        <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-6 footer-contact">
            <center>
            <h3>Contact Details</h3>
            <p>
			<strong>Phone:</strong> +91 9309346826<br>
              <strong>Email:</strong> seda@vit.ac.in<br>

             <br> SEDA Airport<br>
              <br>M78M+34R<br>
             Pune, Maharashtra, Pin: 411014
              <br><br>
             </p>
          </center>
          </div>
         </div>
      </div>
    </div>
	</body>
</html>