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
		<div id="doctor_container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="doctor-lead">
							<center><b>eHealth Care Prism</b></center>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="doctor-follow">
							<center>Secure your family with <b>eHealthCare</b></center>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="docform">
							<form name="speciality-form" action="action/speciality.php" method="POST">
								<table width="90%" align="center" class="specTable" id="table">
									<tr>
										<td colspan="4" class="heading enter"><b>What's Your Speciality Doctor ???</b>
										</td>
									</tr>
									<tr>
										<td>
											<input name="doc_name" type="text" id="doc_name" placeholder="Enter Your Name"  />
											<input name="doc_spec" type="text" id="doc_spec" placeholder="Enter Your Speciality"  />
                                            <input type="submit" value="SUBMIT" class="btn btn-default btn-md sub">
										</td>
									</tr>	
								</table>
							</form>
						</div>
					</div>
				</div><!-- /.row -->

				<div class="row">
					<div class="col-sm-12">
						<div class="doc_advice">
							<form name="advice-form" action="action/advice.php" method="POST">
								<table width="90%" align="center" class="adviceTable" id="table">
									<tr>
										<td colspan="4" class="heading enter"><b>Want To Give Advice ???</b>
										</td>
									</tr>
									<tr>
										<td>
											<input name="doc_name" type="text" id="doc_name" placeholder="Enter Your Name"  />
											<input name="ad_title" type="text" id="ad_title" placeholder="Your Advice Title"  />
										</td>
									</tr>	
									<tr>
										<td></br>
											<span class="span_ad"><b>Advice :</b></span></br>
											<textarea name="advice" id="advice" height="45px" width="200px"></textarea>
											<input type="submit" value="SUBMIT" class="btn btn-default btn-md sub">
										</td>
									</tr>
									<tr> 
										<td>
											<div class="doc_appoint">
												Check your Appointments <a href="doc_appoints.php"><b>here</b></a>.
											</div>
										</td>   
									</tr>	
								</table>
							</form>
						</div>
					</div>
				</div></br>
			</div><!-- /.container--></br>
			<?php include_once'include/footer.php'; ?>
		</div><!-- /#doctor_container-->
	</div><!-- /#main_container-->
</body>
</html>


