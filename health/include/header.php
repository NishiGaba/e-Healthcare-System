<!-- ############   E-Health_Care_Header   ############ -->
<div class="container-fluid">
	<div class="well well-lg">
		<div class="row">
			<div class="col-sm-9">
				<h1><a href="index.php"><span style="font-family:monospace">e</span>Health Care</a></h1>
			</div>
			<div class="col-sm-3 lifeline text-right">
				<span><b style="font-family:inherit; font-size:18px;">Lifeline</b> :</span>
				<span>+91-9876543210</span></br>
				<span><b style="font-family:inherit; font-size:18px;">E-mail</b> :</span>
				<span>ehealthcare@gmail.com</span></br>
				
			</div>
		</div>
	</div><!--  /.well  -->
</div><!--  /.container-fluid  -->

<div class="container-fluid">
	<nav class="navbar navbar-default">
    	<div>
      		<ul class="nav navbar-nav">
        		<li><a href="index.php">HOME</a></li>
        		<li><a href="about.php">ABOUT US</a></li>
        		<li><a href="patient_care.php">PATIENT CARE</a></li>
            <li><a href="service.php">SERVICES</a></li>
        		<li><a href="specialists.php">SPECIALISTS</a></li>
        		<li><a href="appointment.php">APPOINTMENT</a></li>
      		</ul>
    	</div>
    	<div id="login-logout">
    		<?php
    			error_reporting(0);
    			session_start();
    			$user = $_SESSION['name'];
						if(!(isset($user)))
						{
							echo "<a href='login.php'><button type='button' class='btn btn-default'><b>LOG IN</b></button></a>";
						}
    					else
						{
							echo "<a href='logout.php'><button type='button' class='btn btn-default'><b>LOG OUT</b></button></a>";
						}	
    		?>
    	</div>
	</nav><!--  /.nav  -->
</div><!--  /.container-fluid  -->
