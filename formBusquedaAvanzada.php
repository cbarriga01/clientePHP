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
        <title>Búsqueda Avanzada</title>
    </HEAD>
    <BODY>
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
                <h3>Búsqueda Avanzada de Contacto</h3>
                <form action="busquedaAvanzada.php" id="busquedaAvanzada.php" method="get"
                      class="form-horizontal mitad">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Run</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="run">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="nombre">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Apellido</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="apellido">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Mail</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="mail">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Telefono</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="telefono">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Pais</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="pais">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Region</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="region">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Ciudad</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="ciudad">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Direccion</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="direccion">
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <button type="submit" class="btn btn-success left">Enviar</button>
                        </div>
                    </div>
                </form>
                </div> <!-- fin div well -->
            </div> <!-- Fin div segundo col -->
        </div> <!-- Fin div row -->
    </div> <!-- Fin div container -->
    </BODY>
</HTML>