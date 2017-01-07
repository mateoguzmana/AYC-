<?include("includes/conexion.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Asesoría & Consultorías</title>

		<link href="css/master.css" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all" />

		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Start menú -->
			<? include("includes/menu.php"); ?>
			<!-- End menú -->
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>NUESTROS SERVICIOS</h1></a>
					
				</div>
			</div>

			<div class="container-fluid inner-offset">    
				<div class="row services">
					<?
					$query 		=  "SELECT * FROM Img_productos";
					$result 	=  mysql_query($query,$id);
					while($row 	=  mysql_fetch_array($result)){
					$Id 		=  $row["Id"];
					$Nombre 	=  $row["Nombre"];
					$Foto 		=  $row["Foto"];
					$Intro 		=  $row["Intro"];
					$Descripcion=  $row["Descripcion"];
					?>
					<div class="service-item col-xs-12 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
						<img class="full-width" src="../productos/<?=$Foto?>" alt="Img">
						<h4><?=$Nombre?></h4>
						<p><?=$Intro?></p>
						<a class="btn btn-success btn-sm" href="servicios1.php?S=<?=$Id?>">AMPLIAR INFORMACION</a>
					</div>
					<?}?>
				</div>               
			</div>
		
			
		<footer>
        		<div class="color-part2"></div>
        		<div class="color-part"></div>
        		<div class="container-fluid">
            		
             		<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a> &copy; 2015 Asesoría & Consultoría. All rights reserved.</div>
	             </div>
	        </footer>
		</div>

		<!--Main-->   
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
</html>