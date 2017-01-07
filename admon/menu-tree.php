<link rel="StyleSheet" href="dtree.css" type="text/css" />
<script type="text/javascript" src="dtree.js"></script>


<script type="text/javascript">

<!--

d = new dTree('d');

d.add(0,-1,		'MENU PRINCIPAL');

d.add(12,0,		'Generales',										'');
d.add(15,12,	'Imagenes inicio',				'banner.php',		'', _target='contenido');
d.add(19,12,	'Logotipo',						'logo.php',			'', _target='contenido');
d.add(17,12,	'Redes Sociales',				'redes.php',		'', _target='contenido');

d.add(1,0,		'Empresa',											'');
d.add(5,1,		'Contenido',					'bannerempresa.php','', _target='contenido');

d.add(50,0,		'Nuestros servicios',								'');
d.add(53,50,	'Servicios',					'productos.php',	'', _target='contenido');

d.add(66,0,		'De interes',										'');
d.add(68,66,	'Interes',						'interes.php',		'', _target='contenido');

d.add(76,0,		'Alianzas',											'');
d.add(78,76,	'Alianza',						'alianzas.php',		'', _target='contenido');

d.add(80,0,		'Contactenos',										'');
d.add(81,80,	'Contacto',						'contacto.php',		'', _target='contenido');

d.add(61,0,		'Cambiar clave',				'administrar.php',	'', _target='contenido');

document.write(d);


//-->

</script>