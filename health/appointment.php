<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Health_Care</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="main_container">
		<?php include_once 'include/header.php'; ?>
			<div id="appoint_container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="appoint">
								<form name="appoint-form" action="action/appoint_session.php" method="POST">
									<table width="70%" align="center" class="appointTable" id="table">
										<tr>
											<td colspan="4" class="heading prism"><center><b>eHealth Care Prism</b></center></td>
										</tr>
										<tr>
											<td colspan="4" class="text-prism-lead"><center>Secure your family with <b>eHealthCare</b></center></td>
										</tr>
										<tr>
											<td colspan="4" class="text-prism-follow"><center>Find and book appointments with Doctors</center></td>
										</tr>
										<tr>
											<td><center><input name="docname" type="text" id="docname" placeholder="Enter Doctor Name" class="border" /></center>
											</td>
										</tr>	
										<tr>
											<td><center><input name="docspeciality" type="text" id="speciality" placeholder="Enter Speciality" class="border" /></center>
											</td>
										</tr>	
										<tr>
											<td>
												<center><input type="date" name="date"></center>
											</td>
										</tr>
										<tr class="appoint-buttons">
                                        	<td>
                                                <input type="submit" value="Submit" class="btn btn-default btn-lg">
                                            </td>
                                        </tr>
                                        <tr>
											<td colspan="4" class="speciality_index">Click <a href="specialists.php"><b>here</b></a> to find Doctor name according to Speciality.
											</td>
										</tr>	
									</table>
								</form></br>
							</div> 
						</div><!--  /.col-sm-12 -->
					</div><!--  /.row  --></br></br>
				</div><!--  /.container  -->
			</div><!--  /#appoint_container -->
			<?php include_once 'include/footer.php'; ?>
	</div><!--  /#main_conatiner -->
