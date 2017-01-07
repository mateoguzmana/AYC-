<?
include("conexion.php");

$Actual 	= $_SERVER["PHP_SELF"];

$queryR 	= "SELECT * FROM Redes";
$resultR 	= mysql_query($queryR,$id);

while($rowR = mysql_fetch_array($resultR)) {

	$Fb 	= $rowR["Fb"];
	$It 	= $rowR["It"];
	$Go 	= $rowR["Go"];
	$Tw 	= $rowR["Tw"];
	$You 	= $rowR["You"];

}

$queryS 	= "SELECT * FROM Contacto";
$resultS 	= mysql_query($queryS,$id);

while($rowS = mysql_fetch_array($resultS)){

  $Telefono = $rowS["Telefono"];
  $Email 	= $rowS["Email"];
  $Horario 	= $rowS["Horario"];

}

$queryZZ 	= "SELECT * FROM Img_logos ORDER BY Pos ASC LIMIT 1";
$resultZZ 	= mysql_query($queryZZ,$id);

while($rowZZ = mysql_fetch_array($resultZZ)){

	$Logo 	= $rowZZ["Foto"];

}
?>
		  <header id="this-is-top">
	            <div class="container-fluid">
	                <div class="topmenu row">
	                    <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
	                      
	                    </nav>
	                    <nav class="text-right col-sm-3 col-md-3 col-lg-3">
	                    	<?if(!empty($Fb)){?>
	                        <a target="_blank" href="<?=$Fb?>"><i class="fa fa-facebook"></i></a>
	                        <?}if(!empty($Go)){?>
	                        <a target="_blank" href="<?=$Go?>"><i class="fa fa-google-plus"></i></a>
	                        <?}if(!empty($Tw)){?>
	                        <a target="_blank" href="<?=$Tw?>"><i class="fa fa-twitter"></i></a>
	                        <?}if(!empty($You)){?>
	                        <a target="_blank" href="<?=$You?>"><i class="fa fa-youtube"></i></a>
	                    	<?}?>
	                    </nav>
	                </div>
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <a href="" id="logo"><img src="../logos/<?=$Logo?>" width="244" height="71"></a>
	                    </div>
	                    <div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
	                        <div class="text-right header-padding">
	                            <div class="h-block"><span>TELEFONO</span><?=$Telefono?></div>
	                            <div class="h-block"><span>EMAIL </span><?=$Email?></div>
	                            <div class="h-block"><span>HORARIO DE ATENCION</span><?=$Horario?></div>
	                            <a class="btn btn-success" href="contacto.php">SOLICITAR CONSULTA</a>
	                        </div>
	                    </div>
	                </div>
	                <div id="main-menu-bg"></div>  
	                <a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
	                <nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
							<li><a <?if($Actual=="/web/index.php"){echo "class='active1'";}?> href="index.php">INICIO </a></li>
							<li><a <?if($Actual=="/web/empresa.php"){echo "class='active1'";}?> href="empresa.php">EMPRESA</a></li>
							<li><a <?if($Actual=="/web/servicios.php"){echo "class='active1'";}?> href="servicios.php">NUESTROS SERVICIOS</a></li>
							<li><a <?if($Actual=="/web/deinteres.php"){echo "class='active1'";}?> href="deinteres.php">De Interés</a></li>
							<li><a <?if($Actual=="/web/alianzas.php"){echo "class='active1'";}?> href="alianzas.php">ALIANZAS</a></li>
							<li><a <?if($Actual=="/web/contacto.php"){echo "class='active1'";}?> href="contacto.php">CONTACTO</a></li>
						
						</ul>
						
	                </nav>
	                <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
	            </div>
	        </header>