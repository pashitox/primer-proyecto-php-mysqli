<?php
  session_start();
   
  // Elimina la variable email en sesión.
  unset($_SESSION['correo']);
  unset($_SESSION['usuario']);
  // Elimina la sesion.
  session_destroy();
 
  // Redirecciona a la página de login.
  header("Location:index.html");
?>