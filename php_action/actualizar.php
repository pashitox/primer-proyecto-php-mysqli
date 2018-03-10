<?php
include "../php_action/Conexion.php";

$valid['success'] = array('success' => false, 'messages' => array());


if($_POST) {
    $id=$_POST['id'];
    $imagen=$_FILES["imagen"]["name"];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $ocupacio=$_POST['ocupacio'];
    $ND=$_POST['ND'];
    $fechaN=$_POST['fechaN'];
    $nacionalidad=$_POST['nacionalidad'];
    $direccion=$_POST['direccion'];
    $ciudad=$_POST['ciudad'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $pais=$_POST['pais'];
    $direccionA=$_POST['direccionA'];
    $tipoA=$_POST['tipoA'];
    $fechai=$_POST['fechai'];
    $fechaf=$_POST['fechaf'];
    $observ=$_POST['observ'];
    $tipop=$_POST['tipop'];
    $pago=$_POST['pago'];

				
	$sql = "UPDATE cliente SET imagen= '$imagen', nombre= '$nombre', apellido= '$apellido', ocupacio= '$ocupacio', ND= '$ND', 
    fechaN= '$fechaN', nacionalidad= '$nacionalidad', direccion= '$direccion', ciudad= '$ciudad', telefono= '$telefono', email= '$email', pais= '$pais', direccionA= '$direccionA', tipoA= '$tipoA', fechai= '$fechai', fechaf= '$fechaf', observ= '$observ', tipop= '$tipop', pago= '$pago' WHERE id= $id";

	if($con->query($sql) === TRUE) {
		
        echo "Actualizado exitosamente";
        print "<script>alert(\"Actualizado exitosamente.\");window.location='../pages/tables.php';</script>";	
	} else {
        print "<script>alert(\"Actualizado exitosamente.\");window.location='../php_action/editar.php';</script>";
	 	echo  "Error no se ha podido actualizar";
	}

} // /$_POST



?>