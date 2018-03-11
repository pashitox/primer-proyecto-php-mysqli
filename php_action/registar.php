<?php

include('conexion2.php');

move_uploaded_file($_FILES["imagen"]["tmp_name"],"../fotos/fotos" . $_FILES["imagen"]["name"]);	
		
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



$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sentencia="select * from cliente where ND='".$ND."'";
    $sql=$conn->prepare($sentencia); // con el metodo prepare del objeto conexion se prepara la consulta para ser ejecut
    $sql->execute(); //ejecutar la sentencia invocando al metodo execute()
    $resultado=$sql->fetchAll(); // la variable resultado es un arreglo que contiene todas las filas obtenidas de la sentencia 
    $totalregistros=count($resultado); 
    if ($totalregistros>0) //Es porque existen registros
    { 
        foreach ($resultado as $fila) //la variable $fila es un registro en particular obtenido del arreglo
        {
         $bdND=$fila['ND'];
         
        }
        if($ND==$bdND) // SHA: Security Hash Algorithm 
        {
          echo "<script>alert('¡el cliente, esta en el sistema ...!'); window.location='../pages/forms.html';</script>";  
           die();
        }

    } else{
                    
$sql = "INSERT INTO cliente (imagen, nombre, apellido, ocupacio, ND, 
fechaN, nacionalidad, direccion, ciudad, telefono, email, pais, direccionA, tipoA, fechai, fechaf, observ, tipop, pago)
VALUES ('$imagen', '$nombre', '$apellido', '$ocupacio', '$ND', '$fechaN', '$nacionalidad','$direccion',
'$ciudad', '$telefono', '$email','$pais','$direccionA', '$tipoA', '$fechai','$fechaf','$observ', '$tipop', '$pago')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!');window.location='../pages/forms.html'</script>";
}

 
?>