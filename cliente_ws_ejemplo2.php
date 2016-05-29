<?php
session_start();
    
    if( $_SESSION["session"] == "si"){
        //header('Location: /clientePHP/index.php');
        $name = $_SESSION["username"];
    }else{
        //$_SESSION["status"] = "Inicie sesión";
        //$status = $_SESSION["status"];
        session_unset();
        session_destroy();
        header('Location: /clientePHP/formLogin.php');
    }
echo '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">';
echo '<script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>';
echo '<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>';
echo '<script type="text/javascript" src="./js/cargarImg.js"></script>';
echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">';
echo '<link href="./css/estiloMenu.css" rel="stylesheet" />';
/**
 * Created by PhpStorm.
 * User: Kal-El
 * Date: 04-05-2016
 * Time: 11:15
 */
// Esto nos sirve para incluir Zend de forma directa
set_include_path(get_include_path() .
    PATH_SEPARATOR .
    realpath(dirname(__FILE__) . "/../service/application/"));
?>

<?php
if ( isset($_GET['textoBusqueda'])) {
    $_POST['textoBusqueda'] = str_replace(" ", "", $_GET['textoBusqueda']);
// Creamos un cliente SOAP
    require_once("Zend/Soap/Client.php");
    $wsdl_url = "http://localhost:8080/TallerJSP/services/WebServiceProveedor?WSDL";
    $cliente = new Zend_Soap_Client($wsdl_url);


    $array = array("busqueda"=>$_GET['textoBusqueda']);

    if ( ($_GET['textoBusqueda'] != "") ) {
        $response=$cliente->busquedaSimpleCont(array("busqueda" => $_GET['textoBusqueda']));
        $contacto = json_decode($response->busquedaSimpleContReturn);

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
                
                    
                <h3>Búsqueda Simple de Contacto</h3>
                <table class="table table-bordered table-hover table-responsive">
                    <tr class="success">
                        <th>Run</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Imagen</th>

                    </tr>
                    <?php foreach($contacto as $obj) {
                        $run = $obj->run;
                        $nombre = $obj->nombre;
                        $apellido = $obj->apellido;
                        $mail = $obj->mail;
                        $telefono = $obj->telefono;
                        $pais = $obj->pais;
                        $region = $obj->region;
                        $ciudad = $obj->ciudad;
                        $direccion = $obj->direccion;
                        $imagen = $obj->imagen;

                        ?>
                        <tr>
                            <td><?php echo $run ?></td>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $apellido ?></td>

                            <?php
                                
                                if ($imagen == null){
                                    $imagen = './img/contacto.jpg';
                                }
                                else{
                                    echo '<td><img src='. $imagen .' width="100px" class = "thumbnail"></td>';
                                }
                                
                            ?>
                                <td>
                                    <form action="visualizarPerfil.php" method="POST" >
                                        <?php echo "<input type='hidden' name='imagen' value='$imagen'>"?>
                                        <?php echo "<input type='hidden' name='run' value='$run'>"?>
                                        <?php echo "<input type='hidden' name='nombre' value='$nombre'>"?>
                                        <?php echo "<input type='hidden' name='apellido' value='$apellido'>"?>
                                        <?php echo "<input type='hidden' name='mail' value='$mail'>"?>
                                        <?php echo "<input type='hidden' name='telefono' value='$telefono'>"?>
                                        <?php echo "<input type='hidden' name='pais' value='$pais'>"?>
                                        <?php echo "<input type='hidden' name='region' value='$region'>"?>
                                        <?php echo "<input type='hidden' name='ciudad' value='$ciudad'>"?>
                                        <?php echo "<input type='hidden' name='direccion' value='$direccion'>"?>

                                        <input type="submit" value="Ver Perfil" class="btn btn-primary"/>
                                    </form >
                                </td>
                        </tr>
                    <?php } ?>
                </table>
                </div> <!-- fin div well -->
            </div> <!-- Fin div segundo col -->
        </div> <!-- Fin div row -->
    </div> <!-- Fin div container -->


        
        <?php
    }
}
?>