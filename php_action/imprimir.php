<?php 
# Cargamos la librería dompdf.
require_once 'dompdf-master/dompdf_config.inc.php';
 
# Contenido HTML del documento que queremos generar en PDF.
$html='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de Documento en PDF.</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>

<h2 class="titulo">¿Que es DOMPDF?</h2>

<p class="resaltado">Dompdf es una herramienta que permite leer un documento HTML y convertirlo a PDF. El objetivo de esta 
herramienta no es crear un documento esteticamente profesional y personalizado, sino permitir con el mismo
 documento HTML generar un documento PDF para que el usuario lo pueda descargar mas facilmente.</p>
 <br>
 <img src="images/imagen1.jpg" width="500" height="180" class="centrado"> 
 
</body>
</html>';
 
# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();
 
# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
$mipdf ->set_paper("A4", "portrait");
 
# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));
 
# Renderizamos el documento PDF.
$mipdf ->render();
 
# Enviamos el fichero PDF al navegador.
$mipdf ->stream('FicheroEjemplo.pdf');
?>

<?php

include "../php_action/conexion.php";

$id=null;
$sql1= "select * from cliente where id=$id";
$query = $con->query($sql1);
?>

<?php if($query->num_rows > 0):?>
$html='
<table class="table table-bordered table-hover">
<thead>
<th>id</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>pago</th>
	
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["id"]; ?></td>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["apellido"]; ?></td>
	<td><?php echo $r["email"]; ?></td>
	<td><?php echo $r["pago"]; ?></td>
	
</tr>'

?>






