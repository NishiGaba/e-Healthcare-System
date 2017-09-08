<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Health_Care</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sign.js"></script>
</head>
<body>
	<div id="main_container">
		<?php include_once 'include/header.php'; ?>
			<div id="login_container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="login">
								<form name="login-form" action="action/session.php" method="POST">
									<table width="70%" align="center" class="loginTable" id="table">
										<tr>
											<td colspan="4" class="heading prism"><center><b>eHealth Care Prism</b></center></td>
										</tr>
										<tr>
											<td colspan="4" class="text-prism"><center>Secure your family with <b>eHealthCare</b></center></td>
										</tr>
										<tr>
											<td><center><input name="name" type="text" id="name" placeholder="Username" class="border" /></center>
											</td>
										</tr>	
										<tr>
											<td><center><input name="password" type="password" id="password" placeholder="Password" class="border" /></center>
											</td>
										</tr>	
										<tr>
											<td><center>
												<select name="category" id="category">
													<option value="null">Please Select Category</option>
													<option value="1">Patient</option>
													<option value="2">Doctor</option>
												</select></center>
											</td>
										</tr>
										<tr class="login-buttons">
                                        	<td>
                                                <input type="submit" value="Login" class="btn btn-default btn-lg">
                                            </td>
                                        </tr>
                                        <tr class="login-buttons">
                                        	<td> 
                                        		<input type="button" value="Signup" class="btn btn-default btn-lg" onClick="sign()"> 
                                        	</td>
                                    	</tr>
									</table>
								</form></br>
							</div> 
						</div><!--  /.col-sm-12 -->
					</div><!--  /.row  --></br></br>
				</div><!--  /.container  -->
			</div><!--  /#login_container -->
			<?php include_once 'include/footer.php'; ?>
	</div><!--  /#main_conatiner -->