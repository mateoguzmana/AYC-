<?include("includes/conexion.php");

$S 			=  $_GET["S"];

$query  	=  "SELECT * FROM Img_productos WHERE Id='$S'";
$result 	=  mysql_query($query,$id);

while($row 	=  mysql_fetch_array($result)){

$Nombre 	=  $row["Nombre"];
$Foto		=  $row["Foto"];
$Descripcion=  $row["Descripcion"];

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
			<?include("includes/menu.php");?>
			<!-- End menú -->
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1><?=$Nombre?></h1></a>
					
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row">
					<div class="col-sm-3">
						<div class="sidebar-container">
							<div class="wow slideInUp" data-wow-delay="0.3s">
								<ul class="styled">
									<li ><a href="servicios.php">Todos los Servicios</a></li>
									<?
									$query2  	=  "SELECT * FROM Img_productos ORDER BY Pos";
									$result2 	=  mysql_query($query2,$id);
									while($row2 =  mysql_fetch_array($result2)){
									$Id2 		=  $row2["Id"];
									$Nombre2 	=  $row2["Nombre"];

									if($S==$Id2){
									$Activo='class="active"';	
									}else{
									$Activo="";	
									}
									?>
									<li <?=$Activo?>><a href="servicios1.php?S=<?=$Id2?>"><?=$Nombre2?></a></li>
									<?}?>
								</ul>
							</div>
							
						</div>
					</div>
					<div class="col-sm-9 main-content">
						<h1 class="text-center italic wow zoomIn" data-wow-delay="0.3s"><?=$Nombre?></h1>
						<img src="../productos/<?=$Foto?>" class="full-width wow zoomIn" data-wow-delay="0.3s" alt="Img">
						<div class="row">                    	
							
                            
                            <div class="col-xs-12 wow zoomIn" data-wow-delay="0.3s">
								<p  align="justify"><?=$Descripcion?></p>

                               <hr/>
                               
                               
                               
                                <h4>Solicitar Información sobre servicio</h4>
						
						<div id="success"></div>
                            
                            	<form novalidate id="contactForm" class="reply-form form-inline">
                            		<input type="hidden" value="Ha recibido un nuevo mensaje de su formulario del servicio de <?=$Nombre?>." id="Asunto">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-name" id="user-name" placeholder="Nombre" required>
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="user-email" id="user-email" placeholder="Correo Electrónico" required>
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-lastname" id="user-lastname" placeholder="Apellidos">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="user-phone" id="user-phone" placeholder="Tel No.">
									</div>
								</div>
							</div>
							<div class="default-inp form-elem">
								<input type="text" name="user-subject" id="user-subject" placeholder="Asunto">
							</div>
							<div class="form-elem default-inp">
								<textarea id="user-message" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-elem">
								<button type="submit" class="btn btn-success btn-default">Enviar Mensaje</button>
							</div>
						</form>
                               
                                    
                                    
								
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
		<!--Contact form--> 
		<script src="assets/contact/jqBootstrapValidation.js"></script> 
		<script src="assets/contact/contact_me.js"></script>
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