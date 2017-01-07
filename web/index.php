<?
include("includes/conexion.php"); 
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
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all" data-default-color="true" />
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
			<!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
					</div>
				</div>
			</div>
			<!-- Loader end -->
			<!-- Start menú -->
			<?include("includes/menu.php"); ?>
			<!-- End menú -->
	        
	        <div id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
	            <?
	            $query 		=  "SELECT * FROM Img_inicio ORDER BY Pos";
	            $result 	=  mysql_query($query,$id);
	            while($row  =  mysql_fetch_array($result)){
				$Foto 		=  $row["Foto"];
				$Titulo 	=  $row["Titulo"];
				$Frase 		=  $row["Frase"];	            	
	            ?>
	            <div class="item">
            		<img src="../preview/<?=$Foto?>" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1><?=$Titulo?></h1>
	                            </div>
	                        </div>
	                        <p><?=$Frase?><br><a class="btn btn-success" href="#">AMPLIAR</a></p>
	                    </div>
	                </div>
	            </div>
				<?}?>
	        </div>
	        
	        <div class="container-fluid">
        		<div class="row column-info block-content">
        			<?
        			$queryK 	 =  "SELECT * FROM Img_productos ORDER BY Pos ASC LIMIT 3";
        			$resultK 	 =  mysql_query($queryK,$id);

        			while($rowK  =  mysql_fetch_array($resultK)){
        			$IdK 		 =	$rowK["Id"];
        			$NombreK     =  $rowK["Nombre"];
        			$IntroK 	 =  $rowK["Intro"];
        			$DescripcionK=  $rowK["Descripcion"];
        			$FotoK 		 =  $rowK["Foto"];
        			?>
            		<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay="3.3s">
                		<img src="../productos/<?=$FotoK?>" style="height:190px;" alt="slider">
	                    <span></span>
	                    <h3><?=$NombreK?></h3>
	                    <p align="justify"><?=$IntroK?></p>
	                    <a class="btn btn-default btn-sm" href="servicios1.php?S=<?=$IdK?>">AMPLIAR INFORMACIóN</a>
	                </div>
	                <?}?>
	            </div>
	        </div>
	        
	        <hr>
	        <div class="big-hr color-1 wow zoomInUp" data-wow-delay="0.3s">
        		<div class="text-left" style="margin-right:40px;">
            		<h2>SUSCRIBETE A NUESTRO SITIO Y RECIBE INFORMACION DE INTERES</h2>
            		<p>Contadores Publicos Especialistas en Politica y Legislacion Tributaria</p>
				</div>
	            <div><a class="btn btn-success btn-lg" href="#">SUSCRIBIR AHORA</a></div>
	        </div>
	        
	       
	        
	      
	       
	     
	        <div class="block-content bg-image blog-section inner-offset">
        		<div class="container-fluid">
            		<div class="hgroup wow fadeInLeft" data-wow-delay="0.3s">
	                    <h1>ULTIMAS PUBLICACIONES</h1>
	                    <h2>Publicaciones Recientes</h2>
	                </div>
	                <a class="btn btn-danger pull-right read-all-news wow fadeInRight" data-wow-delay="0.3s" href="">VER TODAS LAS PUBLICACIONES</a>
	                <div class="row">
	                		<?
	                		$query5      =   "SELECT * FROM Publicaciones ORDER BY Pos ASC LIMIT 1";
	                        $result5     =   mysql_query($query5,$id);

	                        while($row5  =	mysql_fetch_array($result5)){
	                        $Id5	 	 =  $row5["Id"];
	                        $Foto5 		 =  $row5["Foto"];
	                        $Titulo5 	 =  $row5["Titulo"];
	                        $Intro5 	 =  $row5["Intro"];
	                        $Descripcion5=  $row5["Descripcion"];
	                        $Fecha5 	 =  $row5["Fecha"];
	                        ?>
                		<div class="col-sm-6 col-md-6 col-lg-6 one-news wow fadeInLeft" data-wow-delay="0.3s">
                    		<div style="background-image:url(../publicaciones/<?=$Foto5?>);">
                        		<div>
                            		<a href="detalles.php?P=<?=$Id5?>"><h3><?=$Titulo5?></h3></a>
	                                
	                                <small><?=$Fecha5?></small>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 col-md-6 col-lg-6 two-news wow fadeInRight" data-wow-delay="0.3s">
	                        <?
	                    	}
	                        $query4      =   "SELECT * FROM Publicaciones WHERE Id<>'$Id5' ORDER BY Pos ASC LIMIT 2";
	                        $result4     =   mysql_query($query4,$id);

	                        while($row4  =	mysql_fetch_array($result4)){
	                        $Id4 	     =  $row4["Id"];
	                        $Foto4 		 =  $row4["Foto"];
	                        $Titulo4 	 =  $row4["Titulo"];
	                        $Descripcion4=  $row4["Descripcion"];
	                        $Fecha4 	 =  $row4["Fecha"];
	                        ?>
	                        <div class="news-item row">
	                            <div class="col-sm-6 col-md-6 col-lg-6">
	                                <div style="background-image:url(../publicaciones/<?=$Foto4?>);"></div>
	                            </div>
	                            <div class="col-sm-6 col-md-6 col-lg-6">
	                                <div>
	                                    <a href="detalles.php?P=<?=$Id4?>"><h3><?=$Titulo4?></h3></a>
	                                   
	                                    <small><?=$Fecha4?></small>
	                                </div>
	                            </div>
	                        </div>
	                        <?}?>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div class="container-fluid partners block-content">
	            <div class="hgroup title-space wow fadeInLeft" data-wow-delay="0.3s">
	                <h1>Alianzas</h1>
	                <h2>Alianzas con Nosotros</h2>
	            </div>
	            <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">
	                <?
	                $query2	  	  =   "SELECT * FROM Alianzas ORDER BY Pos";
	                $result2  	  =   mysql_query($query2,$id);
	                while ($row2  =   mysql_fetch_array($result2)) {
	                $FotoAL 	  =   $row2["Foto"];	
	                ?>
	                <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="../Alianzas/<?=$FotoAL?>" alt="Img"></a></div>
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
        
        <script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
		<!-- Loader -->
		<script src="assets/loader/js/classie.js"></script>
		<script src="assets/loader/js/pathLoader.js"></script>
		<script src="assets/loader/js/main.js"></script>
		<script src="js/classie.js"></script>
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