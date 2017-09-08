<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Health_Care</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</head>
<body>
	<div id="main_container">
		<?php include_once 'include/header.php'; ?>

<!-- #####################  SLIDER  #################### -->
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="img/home/health1.jpg" height="189" width="100%">
				      <div class="carousel-caption">
				        <strong>eHealth Care</strong>
				      </div>
				    </div>
				    <div class="item">
				      <img src="img/home/health5.jpg" alt="..." height="189" width="100%">
				      <div class="carousel-caption">
				        <strong>eHealth Care</strong>
				      </div>
				    </div>
				    <div class="item">
				      <img src="img/home/health6.jpg" alt="..." height="189" width="100%">
				      <div class="carousel-caption">
				        <strong>eHealth Care</strong>
				      </div>
				    </div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>
	
		<div id="key_medical_procedures">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="key-heading">
							KEY MEDICAL PROCEDURES
						</div>
					</div>
				</div>
				<div class="row">
					<div col-sm-12>
						<div class="key-text text-justify">
							E-Health Care has consistently led game changing developments in healthcare by bringing
							to the people, the latest innovations in key medical specialities and superspecialities.
							We highlight in this section some of the latest procedures, services and therapies that 
							eHealth Care provides in keeping with the tradition of providing outstanding healthcare 
							of international standards.
						</div><!--  /.key-text  -->
					</div><!--  /.col-sm-12  -->
				</div><!--  /.row  -->

				<div class="row">
					<div class="col-sm-4 thumbnail thumbnail-1">
						<div class="lead text-center">da Vinci&reg; Surgical System</div>
						<img src="img/home/vinci.png" alt="Surgical System">
						<div class="follow text-justify">
							The da Vinci&reg; surgical system is the most advanced platform for minimally invasive 
							surgery available today.The robotic system is a breakthrough in surgeical technology.
						</div>
					</div>
					<div class="col-sm-4 thumbnail thumbnail-2">
						<div class="lead text-center">Bone Marrow Transplant</div>
						<img src="img/home/bone_marrow.gif" alt="Bone Marrow Transplant">
						<div class="follow text-justify">
							Bone Marrow Transplantation treats certain cancers like leukaemias, lymphomas and 
							some non-cancerous disease like thalassaemia and some other bone related diseases.
						</div>
					</div>
					<div class="col-sm-4 thumbnail thumbnail-3">
						<div class="lead text-center">Hand Microsurgery</div>
						<img src="img/home/handsurgery.gif" alt="Hand Microsurgery">
						<div class="follow text-justify">
							eHealth Care is one of the very few dedicated centers in the country for treating hand
							injuries. Highly intricate and complex surgeries are performed aided by a microscope.
						</div>
					</div>
				</div><!--  /.row  -->

				<div class="row">
					<div class="col-sm-4 thumbnail thumbnail-4">
						<div class="lead text-center">The Ideal Knee</div>
						<img src="img/home/knee.png" alt="The Ideal Knee">
						<div class="follow text-justify">
							This surgical technique and the implant design offers the patient less pain, quick recovery
							and the most comfortable knee almost like their natural knee.
						</div>
					</div>
					<div class="col-sm-4 thumbnail thumbnail-5">
						<div class="lead text-center">Infertility Care</div>
						<img src="img/home/infertilitycare.gif" alt="Infertility Care">
						<div class="follow text-justify">
							Our Center for Assisted Reproduction offers world class infertility treatment with advanced
							procedures and equipment and has been achieving high success rates.
						</div>
					</div>
					<div class="col-sm-4 thumbnail thumbnail-6">
						<div class="lead text-center">Trans Oral Robotic Surgery</div>
						<img src="img/home/oralsurgery.png" alt="Trans Oral Robotic Surgery">
						<div class="follow  text-justify">
							TORS, a minimally invasive treatment option, has been shown to improve long term swallowing
							function, reduce risk of infection and fastens the recovery time.
						</div>
					</div>
				</div><!--  /.row  --></br>
			</div><!--  /.container-fluid  -->
			<?php include_once 'include/footer.php'; ?>
		</div><!--  /#key_medical_procedures  -->

	</div><!--  /#main_container  -->
</body>
</html>