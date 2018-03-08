<?php
  session_start();
 
  // PASO 1: Obtener los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
   
  // PASO 2: Conectarse a la BD y leer los datos de la tabla usuarios
  $dsn='mysql:host=localhost;dbname=eldorado'; //significa Data Source Name o Nombre Origen de los Datos
  $usuario='root';
  $contrasena='';
  try 
  {
    $conn = new PDO($dsn,$usuario,$contrasena); // PDO significa Php Data Object: es la manera eficiente de conectarse a cualquier
                                                //repositorio de datos teniendo el string de conexion, el usuario y contrasena 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //atributos requeridos para manejar un posible error o excepcion 
    $sentencia="select * from usuario where correo='".$email."'";
    $sql=$conn->prepare($sentencia); // con el metodo prepare del objeto conexion se prepara la consulta para ser ejecut
    $sql->execute(); //ejecutar la sentencia invocando al metodo execute()
    $resultado=$sql->fetchAll(); // la variable resultado es un arreglo que contiene todas las filas obtenidas de la sentencia 
    $totalregistros=count($resultado); //cuenta la cantidad de registros usando la funcion count

    if ($totalregistros>0) //Es porque existen registros
    { 
        foreach ($resultado as $fila) //la variable $fila es un registro en particular obtenido del arreglo
        {
         $bdcorreo=$fila['correo'];
         $bdcontrasena=$fila['contrasena'];
         $bdnombre=$fila['nombre'];
        
         
        }

                             // (sha1) poner uns has aqui para leer la encriptacion
        if($email==$bdcorreo && ($password)==$bdcontrasena) // SHA: Security Hash Algorithm 
         {
           $_SESSION['correo'] = $email;
           $_SESSION['usuario'] = $bdnombre;    
           unset($password); //destruir la variable 
          // Redirecciono al usuario a la página principal del sitio.

          echo "<script>alert('¡Bienvenido, usuario logeado exitosamente'); window.location='TEMPLATE.html';</script>";  
         }
        else
         {
          echo '<h2>'.'El email o password incorrecto, <a href="index.html">vuelva a intentarlo</a>'.'</h2>';
         }
    }
    else
    {
        echo "<h3>"."No existen Registros para esta Consulta"."</h3>.<br>.<br>";
        echo '<h2>'.'El email o password incorrecto, <a href="index.html">vuelva a intenarlo</a>'.'</h2>';
    }
  } 
  catch (PDOException $e) 
  {
    echo "Error:".$e->getMessage(); 
  }
 
?>