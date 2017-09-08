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
		<div id="patient-care">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="care-heading">
							<center>DOCTOR'S  ADVICE</center>
						</div></br>
					</div>
				</div><!--  /.row  -->

				<div class="row">
					<div class="col-sm-12">
						<div class="patient-care-form">
							<form>
								<table class="table table-hover" id="care_table">
									
									<?php 
										include_once 'include/db_connect.php';
										$SQL="SELECT * FROM `advice` ORDER BY doc_name";
						 				$rs=mysql_query($SQL) or die(mysql_error());

										while($data=mysql_fetch_assoc($rs))
										{
									?>
									<tr style="background-color:#A0A0D2;">
										<th><?=$data['ad_title']?></th>
									</tr>
									<tr style="background-color:#f9f9f9;">
										<td><?=$data['advice']?></td>
									</tr>
									<tr style="background-color:#f9f9f9;">
										<th class="text-right"><?="- Dr." . $data['doc_name']?></th>
									</tr></br>
									<?php } ?>	
								</table>
							</form>	

						</div>
					</div>
				</div><!-- /.row -->
			</div></br>
			<?php include_once'include/footer.php'; ?>
		</div>
	</div>
