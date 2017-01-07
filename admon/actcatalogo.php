<? 
include("variables.php"); 


$query0001			="SELECT * FROM Catalogo" ;
$result0001			=mysql_query($query0001, $id);

While($row0001		=mysql_fetch_array($result0001))
{
$Id					          =$row0001["Id"];

// Información de catalogo en español

$Titulo	              =$row0001["Titulo"];
$SubTitulo1           =$row0001["SubTitulo1"];
$Item1                =$row0001["Item1"];
$Item2                =$row0001["Item2"];
$Item3                =$row0001["Item3"];
$Item4                =$row0001["Item4"];
$Item5                =$row0001["Item5"];
$Item6                =$row0001["Item6"];
$Item7                =$row0001["Item7"];
$Item8                =$row0001["Item8"];
$SubTitulo2           =$row0001["SubTitulo2"];
$Info1                =$row0001["Info1"];
$Info2                =$row0001["Info2"];
$Info3                =$row0001["Info3"];
$Info4                =$row0001["Info4"];
$Info5                =$row0001["Info5"];
$Info6                =$row0001["Info6"];
$CampoGrande          =$row0001["CampoGrande"];

// Información de catalogo en inglés

$TituloEN               =$row0001["TituloEN"];
$SubTitulo1EN           =$row0001["SubTitulo1EN"];
$Item1EN                =$row0001["Item1EN"];
$Item2EN                =$row0001["Item2EN"];
$Item3EN                =$row0001["Item3EN"];
$Item4EN                =$row0001["Item4EN"];
$Item5EN                =$row0001["Item5EN"];
$Item6EN                =$row0001["Item6EN"];
$Item7EN                =$row0001["Item7EN"];
$Item8EN                =$row0001["Item8EN"];
$SubTitulo2EN           =$row0001["SubTitulo2EN"];
$Info1EN                =$row0001["Info1EN"];
$Info2EN                =$row0001["Info2EN"];
$Info3EN                =$row0001["Info3EN"];
$Info4EN                =$row0001["Info4EN"];
$Info5EN                =$row0001["Info5EN"];
$Info6EN                =$row0001["Info6EN"];
$CampoGrandeEN          =$row0001["CampoGrandeEN"];

}
?>

<META http-equiv=Content-Type content="text/html;" charset="iso-8859-1">
<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR:#F3F3F3;
	SCROLLBAR-HIGHLIGHT-COLOR: #CECECE;
	SCROLLBAR-SHADOW-COLOR: #CECECE;
	SCROLLBAR-3DLIGHT-COLOR: #F3F3F3;
	SCROLLBAR-ARROW-COLOR: #CECECE;
	SCROLLBAR-TRACK-COLOR: #CECECE;
	SCROLLBAR-DARKSHADOW-COLOR: #CECECE;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
} 
.itemselect {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.Estilo1 {color: #E1E1E1;
	font-size: 10px;
}
.Estilo45 {font-size: 12px;
	color: #666666;
	font-family: Helvetica;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {font-size: 11px}
.TextField {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.TextField1 {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.itemselect {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: left;
}
.Estilo32 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #000000; }
.Estilo73 {font-size: 12px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
.Estilo115 {font-size: 9px}
.Estilo117 {font-size: 11px}
.Estilo92 {	font-size: 18px;
	color: #154994;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo93 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo94 {font-size: 12px}
.Estilo961 {color: #333333}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextFieldFU {background-color: #FF0000;
color: #FFFFFF;
font-size: 9pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField22 {background-color: #DADADA;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
.TextField211 {background-color: #BCBCBC;
color: #333333;
font-size: 11pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>




<script language="JavaScript">
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea eliminar este registro? "); 
if (agree) 
return true ; 
else 
return false ; 
}

//-->
</script>
</head>

<body style="background-color: transparent">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="80%"><div align="left" class="Estilo92 Estilo94"></div></td>
    <td width="20%" align="right">&nbsp;</td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
  <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#E6E6E6">
    <td height="235" align="center" valign="top" bordercolor="#F2F2F2" bgcolor="#FBFBFB"><span style="margin:0">
<?
$dale	=	$_GET["dale"];

if(!empty($dale))
{
?>
      <BR>
      <span class="TextFieldFU">&nbsp;&nbsp;TAREA EXITOSA&nbsp;&nbsp;</span> <BR>
      <BR>
      <?
}
?>
      <br>
    </span>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
      <tr>
        <td height="138" valign="top"><form action="actcatalogo2.php" method="post" enctype="multipart/form-data" name="fcalen">
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
               
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr><td><h4>Espa&ntilde;ol</h4></td><td><h4>English</h4></td></tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Titulo principal</span><br>
                      <input name="Titulo" type="text" class="TextField22" id="Titulo" style="width:99%" value="<?=$Titulo?>"><br></td>
                    <td width="50%"><span class="Estilo93">Main title</span><br>
                      <input name="TituloEN" type="text" class="TextField22" id="TituloEN" style="width:99%" value="<?=$TituloEN?>"><br></td>
                    </tr>
                </table>
                <br>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr><td><h4>Informacion general</h4></td><td><h4>General information</h4></td></tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Subtitulo</span><br>
                      <input name="SubTitulo1" type="text" class="TextField22" id="Domingo" style="width:99%" value="<?=$SubTitulo1?>"></td>
                      <td width="50%"><span class="Estilo93">Subtitle</span><br>
                      <input name="SubTitulo1EN" type="text" class="TextField22" id="Domingo" style="width:99%" value="<?=$SubTitulo1EN?>"></td>
                  </tr>
                  <tr><td width="50%"><span class="Estilo93">Campo 1</span><br>
                      <input name="Item1" type="text" class="TextField22" id="Item1" style="width:99%" value="<?=$Item1?>"><br></td>
                      <td width="50%"><span class="Estilo93">Item 1</span><br>
                      <input name="Item1EN" type="text" class="TextField22" id="Item1EN" style="width:99%" value="<?=$Item1EN?>"><br></td>
                  </tr>
                  <tr>
                    <td width="50%" valign="top">
                    <span class="Estilo93">Campo 2</span><br>
                      <input name="Item2" type="text" class="TextField22" id="Item2" style="width:99%" value="<?=$Item2?>">
                      </td>
                      <td width="50%"><span class="Estilo93">Item 2</span><br>
                      <input name="Item2EN" type="text" class="TextField22" id="Item2EN" style="width:99%" value="<?=$Item2EN?>">
                      </td>
                  </tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Campo 3</span><br>
                      <input name="Item3" type="text" class="TextField22" id="Item3" style="width:99%" value="<?=$Item3?>"></td>
                       <td width="50%"><span class="Estilo93">Item 3</span><br>
                      <input name="Item3EN" type="text" class="TextField22" id="Item3EN" style="width:99%" value="<?=$Item3EN?>"></td>
                  </tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Campo 4</span><br>
                      <input name="Item4" type="text" class="TextField22" id="Item4" style="width:99%" value="<?=$Item4?>"></td>
                      <td width="50%"><span class="Estilo93">Item 4</span><br>
                      <input name="Item4EN" type="text" class="TextField22" id="Item4EN" style="width:99%" value="<?=$Item4EN?>"></td>
                  </tr>
                  <tr><td width="50%"><span class="Estilo93">Campo 5</span><br>
                      <input name="Item5" type="text" class="TextField22" id="Item5" style="width:99%" value="<?=$Item5?>"><br></td>
                      <td width="50%"><span class="Estilo93">Item 5</span><br>
                      <input name="Item5EN" type="text" class="TextField22" id="Item5EN" style="width:99%" value="<?=$Item5EN?>"><br></td>
                  </tr>
                  <tr>
                    <td width="50%" valign="top">
                    <span class="Estilo93">Campo 6</span><br>
                      <input name="Item6" type="text" class="TextField22" id="Item6" style="width:99%" value="<?=$Item6?>">
                      </td>
                      <td width="50%"><span class="Estilo93">Item 6</span><br>
                      <input name="Item6EN" type="text" class="TextField22" id="Item6EN" style="width:99%" value="<?=$Item6EN?>">
                      </td>
                  </tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Campo 7</span><br>
                      <input name="Item7" type="text" class="TextField22" id="Item7" style="width:99%" value="<?=$Item7?>"></td>
                       <td width="50%"><span class="Estilo93">Item 7</span><br>
                      <input name="Item7EN" type="text" class="TextField22" id="Item7EN" style="width:99%" value="<?=$Item7EN?>"></td>
                  </tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Campo 8</span><br>
                      <input name="Item8" type="text" class="TextField22" id="Item8" style="width:99%" value="<?=$Item8?>"></td>
                       <td width="50%"><span class="Estilo93">Item 8</span><br>
                      <input name="Item8EN" type="text" class="TextField22" id="Item8EN" style="width:99%" value="<?=$Item8EN?>"></td>
                  </tr>
                  <hr>
                </table>
                <hr>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                  <td width="50%"><h4>Informacion del negocio</h4></td>
                  <td width="50%"><h4>Company Information</h4></td>
                  </tr>
                  <tr>
                      <td width="50%"><span class="Estilo93">Subtitulo</span>
                      <input name="SubTitulo2" type="text" class="TextField22" id="SubTitulo2" style="width:99%" value="<?=$SubTitulo2?>"></td>
                      <td width="50%"><span class="Estilo93">Subtitle</span>
                      <input name="SubTitulo2EN" type="text" class="TextField22" id="SubTitulo2EN" style="width:99%" value="<?=$SubTitulo2EN?>"></td>
                      </tr>
                      <tr>
                      <td width="50%"><span class="Estilo93">Info 1</span>
                      <input name="Info1" type="text" class="TextField22" id="Info1" style="width:99%" value="<?=$Info1?>"></td>
                      <td width="50%"><span class="Estilo93">Info 1</span>
                      <input name="Info1EN" type="text" class="TextField22" id="Info1EN" style="width:99%" value="<?=$Info1EN?>"></td>
                  </tr>
                </table>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%"><span class="Estilo93">Info 2</span>
                      <input name="Info2" type="text" class="TextField22" id="Info2" style="width:99%" value="<?=$Info2?>"></td>
                      <td width="50%"><span class="Estilo93">Info 2</span>
                      <input name="Info2EN" type="text" class="TextField22" id="Info2EN" style="width:99%" value="<?=$Info2EN?>"></td>
                  </tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Info 3</span>
                      <input name="Info3" type="text" class="TextField22" id="Info3" style="width:99%" value="<?=$Info3?>"></td>
                      <td width="50%"><span class="Estilo93">Info 3</span>
                      <input name="Info3EN" type="text" class="TextField22" id="Info3EN" style="width:99%" value="<?=$Info3EN?>"></td>
                  </tr>
                </table>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                      <td width="50%"><span class="Estilo93">Info 4</span>
                      <input name="Info4" type="text" class="TextField22" id="Info4" style="width:99%" value="<?=$Info4?>"></td>
                      <td width="50%"><span class="Estilo93">Info 4</span>
                      <input name="Info4EN" type="text" class="TextField22" id="Info4EN" style="width:99%" value="<?=$Info4EN?>"></td>
                  </tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Info 5</span>
                      <input name="Info5" type="text" class="TextField22" id="Info5" style="width:99%" value="<?=$Info5?>"></td>
                      <td width="50%"><span class="Estilo93">Info 5</span>
                      <input name="Info5EN" type="text" class="TextField22" id="Info5EN" style="width:99%" value="<?=$Info5EN?>"></td>
                  </tr>
                </table>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%"><span class="Estilo93">Info 6</span>
                      <input name="Info6" type="text" class="TextField22" id="Info6" style="width:99%" value="<?=$Info6?>"></td>
                      <td width="50%"><span class="Estilo93">Info 6</span>
                      <input name="Info6EN" type="text" class="TextField22" id="Info6EN" style="width:99%" value="<?=$Info6EN?>"></td>
                  </tr>
                  <tr>
                    <td width="50%"><span class="Estilo93">Campo de comentarios</span>
                      <input name="CampoGrande" type="text" class="TextField22" id="CampoGrande" style="width:99%" value="<?=$CampoGrande?>"></td>
                      <td width="50%"><span class="Estilo93">Comments field</span>
                      <input name="CampoGrandeEN" type="text" class="TextField22" id="CampoGrandeEN" style="width:99%" value="<?=$CampoGrandeEN?>"></td>
                  </tr>
                </table>
                <hr>
                <p>
                  <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
                  <br>
                  <input name="Submit2" type="submit" class="TextField211" value="REALIZAR OPERACION">
                </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div></td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>

