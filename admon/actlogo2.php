<? 
include("variables.php"); 

$Id	=	$_REQUEST["Id"];

$query0001="SELECT* FROM Img_logos where Id = '$Id'" ;
$result0001=mysql_query($query0001, $id);

While($row0001=mysql_fetch_array($result0001))
{
$Id0001				=$row0001["Id"];
$Foto				  =$row0001["Foto"];
$Pos          =$row0001["Pos"];
}
?>

<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
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
<script LANGUAGE="JavaScript">

function Validar(form)
{

     if (form.Pos.value == "")
  { alert("Por favor ingrese una posicion"); form.Nombre.focus(); return; }

  
  form.submit();
}


</script>



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
    <td width="20%" align="right"><a href="inglogo.php" class="Estilo93">Ingresar nuevo</a></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
  <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#E6E6E6">
    <td height="235" align="center" bordercolor="#F2F2F2" bgcolor="#FBFBFB"><span style="margin:0">
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
        <td height="138" valign="top"><form action="actlogo3.php" method="post" enctype="multipart/form-data" name="fcalen">
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
               
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%"><br>
                      <input name="Pos" type="text" class="TextField22" id="Pos" value="<?=$Pos?>" size="2" style="display:none;"></td>
                      <input name="Id" type="text" class="TextField22" id="Id" value="<?=$Id0001?>" size="2" style="display:none;"></td>
                  </tr>
                </table>
                <br>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="50%" height="30"><span class="Estilo93">Logo</span><br>
                      <span class="Estilo93" style="font-size: 8px"><a href="../logos/<?=$Foto?>" target="blank"><img src="../logos/<?=$Foto?>" width="104" height="44"></a></span> <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
                      <br>
                      <input name="file1" type="file" class="TextField22" id="file1">
                      <span class="Estilo93">(2000x1000) px</span></td>
                    <td width="50%" valign="top">&nbsp;</td>
                  </tr>
              </table>
                <br>
                <br>
<hr>
                <p><br>
                  <input name="Submit2" type="button" onClick="Validar(this.form);" class="TextField211" value="REALIZAR OPERACION">
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

