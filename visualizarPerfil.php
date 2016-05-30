<?php
session_start();
echo '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">';
echo '<script type="text/javascript" src="./js/cargarImg.js"></script>';
/**
 * Created by PhpStorm.
 * User: kal-el
 * Date: 24-05-16
 * Time: 13:10
 */
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
        <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>
        
        <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="./css/estiloMenu.css" rel="stylesheet" />
    <title>Perfil de Contacto Empresarial</title>
</HEAD>
<BODY>

<?php
$imagen = $_POST['imagen'];
$run = $_POST['run'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$region = $_POST['region'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
?>

<div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    
                    <div class="nav-side-menu navbar-fixed">
                    <div class="brand">Brand Logo</div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li>
                                  <a href="index.php"><i class="fa fa-home fa-lg"></i>Home</a>
                                </li>
                                <li data-toggle="collapse" data-target="#busqueda" class="collapsed">
                                  <a href="#"><i class="fa fa-book fa-lg"></i> Búsquedas <span class="arrow"></span></a>
                                </li>  
                                <ul class="sub-menu collapse" id="busqueda">
                                  <li><a href="formBusquedaSimple.php">Búsqueda Simple</a></li>
                                  <li><a href="formBusquedaAvanzada.php">Búsqueda Avanzada</a></li>
                                </ul>
                                <li>
                                    <a href="logout.php">
                                        <i class="fa fa-sign-out fa-lg"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                </div> <!-- Fin div primer col -->
            
            <div class="col-sm-9 col-md-9">
                <div class="jumbotron">
                
                    <table class="table">
    <tr>
        <td><h1 id="titulo">Perfil de Contacto</h1></td>
    </tr>
</table>

<div id="datos">
    <table class="table table-bordered table-hover table-responsive">
        <tr class="success">
            <td>Imagen: </td>
            <td id="imgContainer"><img src=<?php echo $imagen?> width="100px" class = "thumbnail"></td>
        </tr>
        <tr>
            <td>Run: </td>
            <td><?php echo $run?></td>
        </tr>

        <tr class="success">
            <td>Nombre: </td>
            <td><?php echo $nombre." ".$apellido?></td>
        </tr>

        <tr>
            <td>Mail: </td>
            <td><?php echo $mail?></td>
        </tr>

        <tr class="success">
            <td>Teléfono: </td>
            <td><?php echo $telefono?></td>
        </tr>

        <tr>
            <td>País: </td>
            <td><?php echo $pais?></td>
        </tr>

        <tr class="success">
            <td>Región: </td>
            <td><?php echo $region?></td>
        </tr>

        <tr>
            <td>Ciudad: </td>
            <td><?php echo $ciudad?></td>
        </tr>

        <tr class="success">
            <td>Dirección: </td>
            <td><?php echo $direccion?></td>
        </tr>
    </table>
</div>
                
            
                
                </div> <!-- fin div well -->
            </div> <!-- Fin div segundo col -->
        </div> <!-- Fin div row -->
    </div> <!-- Fin div container -->
</BODY>
</HTML>