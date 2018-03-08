<?php

move_uploaded_file($_FILES["imagen"]["tmp_name"],"fotografias/" . $_FILES["imagen"]["name"]);			
$imagen=$_FILES["imagen"]["name"];
$nombre=$_POST['nombre'];
$pellido=$_POST['apellido'];
$ocupacion=$_POST['ocupacion'];
$ND=$_POST['ND'];
$fechaN=$_POST['fechaN'];
$nacionalidad=$_POST['nacionalidad'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['fax'];
$email=$_POST['email'];
$pais=$_POST['pais'];
$direccionA=$_POST['direccionA'];
$tipoA=$_POST['tipoA'];
$Fechai=$_POST['fechai'];
$Fechaf=$_POST['fechaf'];
$observ=$_POST['observ'];
$tipop=$_POST['tipop'];
$pago=$_POST['pago'];

$precio=$_POST['precio'];
$existencia=$_POST['existencia'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO clientes (imagen, nombre, apellido, ocupacion, ND, 
fechaN, nacionalidad, direccion, ciudad, telefono, email, pais, direccionA, tipoA, Fechai, fechaf, observ, tipop, pago)
VALUES ('$imagen', '$nombre', '$apelllido','$ocupacion','$ND', '$fechaN', '$nacionalidad','$direccion',
'$ciudad', '$telefono', '$email','$pais','$direccionA', '$tipoA', '$Fechai','$Fechaf','$observ', '$tipop', '$pago')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!');window.location='../pages/forms.html'</script>";
// }

// }
?>