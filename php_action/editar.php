<?php
include "conexion.php";

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
?>

<?php if($cliente!=null):?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Inicio</a>
           
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Sistema de Adminitracion - El Dorado </a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
                  
                    secondtruth <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../cerrar-sesion.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="../TEMPLATE.html" class="active"><i class="fa fa-dashboard fa-fw"></i>informacion</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                    </li>
                    <li>
                        <a href="../pages/tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                    </li>
                    
                    </div>
                </div>
            </nav>
        </div>
                
                <div id="page-wrapper">
                <!-- /.navbar-top-links -->
                <div class="col-lg-12">
                    <h1 class="page-header">Registro de Clientes</h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                    
                    <form method="POST"   enctype="multipart/form-data" action="../php_action/actualizar.php">
                                    <div class="col-lg-12">
                                            <h2 class="page-header">Informacion del Participante</h2>
                                        </div>
                                <div class="form-group">
                                    <label>nombre</label>
                                    <input value="<?php echo $cliente->nombre; ?>" name="nombre" class="form-control" required>
                                    <p class="help-block">introdusca su nombre.</p>
                                </div>
                                <div class="form-group">
                                <label>apellido</label>
                                    <input name="apellido" value="<?php echo $cliente->apellido; ?>" class="form-control"required>
                                    <p class="help-block">introdusca su apellido</p>
                                </div>
                                
                            
                                <div class="form-group">
                                    <label>Organizacion u Ocupacion </label>
                                    <input name="ocupacio" value="<?php echo $cliente->ocupacio; ?>" class="form-control" required>
                                    <p class="help-block">ocupacion.</p>
                                </div>

                                <div class="form-group">
                                    <label>N. de Pasaporte/R.U.T </label>
                                    <input name="ND" type="number" value="<?php echo $cliente->ND; ?>" class="form-control">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input name="fechaN" type="date" value="<?php echo $cliente->fechaN; ?>" class="form-control">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                       
                                <div class="form-group">
                                    <label>nacionalidad</label>
                                    <input name="nacionalidad" value="<?php echo $cliente->nacionalidad; ?>" type="text" class="form-control" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                        <label>Direccion</label>
                                        <input name="direccion" type="text" value="<?php echo $cliente->direccion; ?>" class="form-control" placeholder="Enter text">
                                    </div>
                                    <div class="form-group">
                                            <label>Ciudad</label>
                                            <input name="ciudad" value="<?php echo $cliente->ciudad; ?>" type="text" class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                                <label>Pais</label>
                                                <input name="pais" type="text" value="<?php echo $cliente->pais; ?>" class="form-control" placeholder="Enter text">
                                            </div>
                                            <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input name="telefono" value="<?php echo $cliente->telefono; ?>" type="number" class="form-control" placeholder="Enter text">
                                                </div>
                                                <div class="form-group">
                                                        <label>Ejemplo de Correo</label>
                                                   <p class="form-control-static">email@Ejemplo.com</p>
                                                  </div>

                                                    <div class="form-group">
                                                    <label>email</label>
                                                    <input  name="email" value="<?php echo $cliente->email; ?>" type="email" class="form-control" placeholder="Enter text">
                                                     </div>

                                                    
                                       <div class="form-group">
                                       <label>agregar foto Cliente</label>
                                         <input name="imagen"value="<?php echo $cliente->imagen; ?>" type="file">
                                </div>

                                <div class="form-group">
                                        <label>Direcion del departamento</label>
                                        <textarea name="direccionA" value="<?php echo $cliente->direccionA; ?>" class="form-control" rows="3"></textarea>
                                    </div>

                                <div class="col-lg-12">
                                        <h2 class="page-header">Seleccion de Apartemento</h2>
                                    </div>
                                    <div class="form-group">
                                            <label>tipos de apartamentos</label>
                                            <div class="radio">
                                                <label>
                                                    <input name="tipoA" value="<?php echo $cliente->tipoA; ?>" type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>1 habitacion
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="tipoA" value="<?php echo $cliente->tipoA; ?>" type="radio" name="optionsRadios" id="optionsRadios2" value="2"> 2 habitacion
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="tipoA" type="radio" value="<?php echo $cliente->tipoA; ?>" name="optionsRadios" id="optionsRadios3" value="3">3 habitacion
                                                </label>
                                            </div>
                                        </div>



                              
                                <div class="form-group">
                                    <label>fecha de estadia</label>
                                </div>
                                <div>
                                    <label>F. inicio</label>
                                    <input name="fechai" value="<?php echo $cliente->fechai; ?>" type="date" class="form-control">
                                    <label>F. final</label>
                                    <input name="fechaf"  value="<?php echo $cliente->fechaf; ?>" type="date" class="form-control">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                        <label>Observaciones del departamento</label>
                                        <textarea name="observ" value="<?php echo $cliente->observ; ?>" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                            <h2 class="page-header">Mode de Pago</h2>
                                        </div>
                                    <div class="form-group">
                                            <label>tipos de Pago</label>
                                            <div class="radio">
                                                <label>
                                                    <input name="tipop" value="<?php echo $cliente->tipop; ?>"  type="radio" value="T.Debito"> Targeta Debito
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input value="<?php echo $cliente->tipop; ?>" name="tipop" type="radio" value="T.Credito"> Targeta de credito
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input  name="tipop" value="<?php echo $cliente->tipop; ?>"  type="radio" value="Efectivo"> Efectivo
                                                </label>
                                            </div>
                                        </div>

                                    <label>monto a pagar</label>
                                    <div class="form-group input-group">
                                         
                                            <span class="input-group-addon">$</span>
                                            <input value="<?php echo $cliente->pago; ?>" name="pago" type="number" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                             
                                

                                        <input type="hidden" name="id" value="<?php echo $cliente->id; ?>">
                                        <button type="submit" class="btn btn-default">Actualizar</button>
                                     
                                    </form>
                                         <!-- /.col-lg-6 (nested) -->
                    


   <!-- /.col-lg-6 (nested) -->
   </div>

<!-- /.row (nested) -->
</div>

<!-- /.panel-body -->
</div>

<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->


<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>




</body>
</html>
                                 
         
                                    
                              <?php else:?>
                       <p class="alert alert-danger">404 No se encuentra</p>
                            <?php endif;?>