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
		<div id="speciality">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="spec-heading">
							<center>DOCTOR'S  SPECIALITIES</center>
						</div></br>
					</div>
				</div><!--  /.row  -->
				
				<div class="row">
					<div class="col-sm-12">
						<div class="speciality-form">
							<form>
								<table class="table table-hover" id="speciality_table">
									<tr>
										<th>Doctor's Name</th>
										<th>Speciality</th>
									</tr>

									<?php 
										include_once 'include/db_connect.php';
										$SQL="SELECT * FROM `speciality` ORDER BY name";
						 				$rs=mysql_query($SQL) or die(mysql_error());

										while($data=mysql_fetch_assoc($rs))
										{
									?>
									<tr>
										<td><?="Dr." . $data['name']?></td>
										<td><?=$data['doc_spec']?></td>
									</tr>
									<?php } ?>	
								</table>
							</form>	

						</div>
					</div>
				</div><!-- /.row -->
			</div>
		</div></br>
		<?php  include_once 'include/footer.php'; ?>
	</div>
</body>
</html>