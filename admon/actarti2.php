<? 
include("variables.php"); 

$Id	=	$_REQUEST["Id"];

$query0001="SELECT * FROM Img_carrusel where Id = '$Id'" ;
$result0001=mysql_query($query0001, $id);

while($row0001=mysql_fetch_array($result0001))
{
$Id0001				=$row0001["Id"];
$Linea				=$row0001["IdLinea"];
$Foto				=$row0001["Foto"];
}

$query000a			="SELECT* FROM Categorias where Id = '$Linea' order by Pos" ;
$result000a			=mysql_query($query000a, $id);

while($row000a		=mysql_fetch_array($result000a))
{
$Nombrea			=$row000a["Nombre"];
$Coda				=$row000a["Id"];
}





?>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR: #F3F3F3;
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
	background-color: #FFF;
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
*{ behavior: url(iepngfix.htc);}
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
font-size: 11pt;
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
-->
</style>
<script LANGUAGE="JavaScript">

function Validar(form)
{
 
     if (form.Grupo.value == "")
  { alert("Por favor seleccione una Categoria"); form.Grupo.focus(); return; }


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


	<script src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/samples/sample.css" rel="stylesheet">
	<script>

// The instanceReady event is fired, when an instance of CKEditor has finished
// its initialization.
CKEDITOR.on( 'instanceReady', function( ev ) {
	// Show the editor name and description in the browser status bar.
	document.getElementById( 'eMessage' ).innerHTML = 'Instance <code>' + ev.editor.name + '<\/code> loaded.';

	// Show this sample buttons.
	document.getElementById( 'eButtons' ).style.display = 'block';
});

function InsertHTML() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Insert HTML code.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertHtml
		editor.insertHtml( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function InsertText() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'txtArea' ).value;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Insert as plain text.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertText
		editor.insertText( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function SetContents() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;

	// Set editor contents (replace current contents).
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setData
	editor.setData( value );
}

function GetContents() {
	// Get the editor instance that you want to interact with.
	var editor = CKEDITOR.instances.editor1;

	// Get editor contents
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
	alert( editor.getData() );
}

function ExecuteCommand( commandName ) {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Execute the command.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-execCommand
		editor.execCommand( commandName );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function CheckDirty() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	// Checks whether the current editor contents present changes when compared
	// to the contents loaded into the editor at startup
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-checkDirty
	alert( editor.checkDirty() );
}

function ResetDirty() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	// Resets the "dirty state" of the editor (see CheckDirty())
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-resetDirty
	editor.resetDirty();
	alert( 'The "IsDirty" status has been reset' );
}

function Focus() {
	CKEDITOR.instances.editor1.focus();
}

function onFocus() {
	document.getElementById( 'eMessage' ).innerHTML = '<b>' + this.name + ' is focused </b>';
}

function onBlur() {
	document.getElementById( 'eMessage' ).innerHTML = this.name + ' lost focus';
}

	</script>

</head>

<body style="background-color: transparent">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
  <tr valign="middle" bordercolor="#FFFFFF" >
    <td height="132" align="center" bordercolor="#F2F2F2" ><br>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
        <tr>
          <td height="62" valign="top"><form action="actarti3.php" method="post" enctype="multipart/form-data" name="fcalen">
            <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="80%"><div align="left" class="Estilo92 Estilo94"></div></td>
                <td width="20%" align="right"><a href="ingarti.php" class="Estilo93">Ingresar nuevo</a></td>
              </tr>
            </table>
            <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left"> INFORMACION DEL ITEM<br>
                    <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
                    <br>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="50%" height="48"><span class="Estilo93">Categoria</span><br>
                          <select name="Grupo" class="TextField22" id="Grupo" style="width:99%">
                            <option value="<?=$Coda?>" selected><?=$Nombrea?></option>
                            <?
$query0001="SELECT* FROM Categorias where Id <> '$Coda' order by Pos" ;
$result0001=mysql_query($query0001, $id);

while($row0001=mysql_fetch_array($result0001))
{
$Nombre				=$row0001["Nombre"];
$Cod				=$row0001["Id"];
?>
                            <option value="<?=$Cod?>">
                              <?=$Nombre?>
                              </option>
                            <?
}
?>
                          </select></td>
                      </tr>
                      <tr>
                        <td width="50%"><span class="Estilo93">Foto</span><br>
                        	<a href="../carrusel/<?=$Foto?>" target="blank" title="Ver foto"><img src="../carrusel/<?=$Foto?>" style="width:100px;"></a>
                          <input name="file1" type="file" class="TextField22" id="file1" style="width:99%" value=""></td>
                      </tr>
                    </table>
                    <label><br>
                    <br>
                    <input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="REALIZAR OPERACION">
                    <br>
                </label>
                  <br>
                </div></td>
              </tr>
            </table>
          </form></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
