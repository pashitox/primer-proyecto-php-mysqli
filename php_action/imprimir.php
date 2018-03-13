<?php 
# Cargamos la librería dompdf.
require_once '../dompdf/lib/html5lib/Parser.php';

require_once '../dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();




include "../php_action/conexion.php";

$id=null;
$sql1= "select * from cliente where id = ".$_GET["id"];
$query = $con->query($sql1);
$cliente = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $cliente=$r;
  break;
}

  } 

 $nombre = $cliente->nombre; 
 $apellido = $cliente->apellido; 
 $ND = $cliente->ND; 
 $ocupacio = $cliente->ocupacio; 
 $fechaN = $cliente->fechaN; 
 $nacionalidad = $cliente->nacionalidad; 
 $telefono = $cliente->telefono; 
 $email = $cliente->email; 
 $direccion = $cliente->direccion; 
 $direccionA = $cliente->direccionA; 
 $tipop = $cliente->tipop;
 $pago = $cliente->pago;  
 $fechai = $cliente->fechai;
 $fechaf = $cliente->fechaf;  
 $observ = $cliente->observ;  

# Contenido HTML del documento que queremos generar en PDF.
$html='




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
</head>

<body>

    <div id="page-wrap">
    
        <img width="200" height="200" src="../images/img-01.png" alt="Photo of Cthulu" id="pic" />

<div id="contact-info" class="vcard">
        
<!-- Microformats! -->

<h1 class="fn">facturacion</h1>

<p>
	Cell: <span class="tel">555-666-7777</span><br />
	Email: <a class="email" href="mailto:greatoldone@lovecraft.com">greatoldone@lovecraft.com</a>
</p>
</div>
	
<div id="datos del cliente">
<h2>nombre: '.$nombre.'</h2>
<h2>Apellido:'.$apellido.'</h2>
<h2>Num de identificacion:'.$ND.'</h2>
<h2>cargo o ocupacion: '.$ocupacio.'</h2>
<h2>Fecha Nacimineto: '.$fechaN.' </h2>
<h2>Nacionalidad: '.$nacionalidad.'</h2>
<h2>telefono: '.$telefono.'</h2>
<h2>email: '.$email.'</h2>
<p>
	
</p>
</div>




<div class="clear"></div>

<dl>
<dd class="clear"></dd>
<div id="contact-info" class="vcard">
<dt>detalles del pago</dt>
<dd>
	<h2>direccion de Aparatamento: '.$direccionA.' </h2>
	
	<h2>tipo de pago: '.$tipop.'</h2>
	<h2>fecha de inicio: '.$fechai.'</h2>
	<h2>fecha final: '.$fechaf.'</h2>
	<h2>observaciones: '.$observ.'</h2>
	<h2>total a pagar: '.$pago.'$</h2>

</div>
	<p><strong>Major:</strong> Public Relations<br />
	   <strong>Minor:</strong> Scale Tending</p>
</dd>



<dt>References</dt>
<dd>Available on request</dd>

<dd class="clear"></dd>
</dl>

<div class="clear"></div>

</div>

</body>

</html>


';
 
# Instanciamos un objeto de la clase DOMPDF.
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>



