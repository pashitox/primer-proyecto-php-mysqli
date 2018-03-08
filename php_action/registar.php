<?php

include('conexion.php');

move_uploaded_file($_FILES["imagen"]["tmp_name"],"../fotos" . $_FILES["imagen"]["name"]);			
$imagen=$_FILES["imagen"]["name"];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

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


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO cliente (imagen, nombre, apellido, ND, 
fechaN, nacionalidad, direccion, ciudad, telefono, email, pais, direccionA, tipoA, fechai, fechaf, observ, tipop, pago)
VALUES ('$imagen', '$nombre', '$apellido','$ND', '$fechaN', '$nacionalidad','$direccion',
'$ciudad', '$telefono', '$email','$pais','$direccionA', '$tipoA', '$fechai','$fechaf','$observ', '$tipop', '$pago')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!');window.location='../pages/forms.html'</script>";
// }

// }
?>