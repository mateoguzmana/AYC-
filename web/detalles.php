<?include("includes/conexion.php");

$P 			=    $_GET["P"];

$query 		=    "SELECT * FROM Publicaciones WHERE Id='$P'"; 		
$result 	=	 mysql_query($query,$id);

while ($row =	 mysql_fetch_array($result)) {

$Foto       =	 $row["Foto"];
$Titulo     =	 $row["Titulo"];
$Descripcion=	 $row["Descripcion"]; 
$Fecha 		= 	 $row["Fecha"];

}

?>
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
			<? include("includes/menu.php");?>
			<!-- End menú -->

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>De Interés</h1></a>
                    
                    <div class="pull-right">
					<a class="btn btn-danger  wow fadeInRight" data-wow-delay="0.3s" href="deinteres.php" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">VOLVER</a>
					</div>
					
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-12 posts">
						<div class="single-post">
							<div class="wow fadeInUp" data-wow-delay="0.3s">
								<img src="../publicaciones/<?=$Foto?>" alt="Img">
								<div class="post-info">
									<span><?=$Fecha?></span>
								</div>
								<h1><?=$Titulo?></h1>
								<div class="post-content">
									<p align="justify"><?=$Descripcion?></p>		
								</div>
							</div>
						</div>
						
						
					</div>
					        	
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