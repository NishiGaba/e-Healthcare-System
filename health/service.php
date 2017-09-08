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

		<div id="services">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="service-heading">
							OUR SERVICES
						</div>
					</div><!--  /.col-sm-12  -->

					<div class="row">
						<div class="col-md-12">
							<div class="service-img">
								<center><img src="img/services.png" height="240" width="80%" alt="eHealthCare"></center>
							</div>
						</div>
					</div>
					
					<div class="row p p1">
						<div class="col-sm-12 text-justify">
							This quality of patient care is possible in <b>eHealth Care</b> because of an engaged workforce that takes pride in its day-to-day responsibilities. They are able to alleviate feelings of stress and fear in patients while instilling in them a positive approach towards treatment. Through small acts of kindness, they create a superior patient experience that few others are able to match.
						</div>
					</div>
					<div class="row p p2">
						<div class="col-sm-12 text-justify">
							With over 2000 doctors working diligently in about 52 varied specialities, eHealth Care cater to all your health needs and only platform where you can find own doctor by thier speciality. This portal is the one of the finest ways to beat the challenges that arise in order to avail healthcare.
						</div>
				</div>
				</div><!--  /.row  --></br></br>
			</div><!--  /.container  --></br>
			<?php include_once 'include/footer.php'; ?>
		</div><!--  /#about_us  -->
	</div><!--  /#main_container  -->
</body>
</html>

