<?php
	session_start();
    echo "<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">";
    echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";

	set_include_path(get_include_path() .
    PATH_SEPARATOR .
    realpath(dirname(__FILE__) . "/../service/application/"));

    $usuario = "";
    $password = "";

    if (isset($_POST['usuario'])){
    		$usuario=$_POST['usuario'];
    }
    if (isset($_POST['password'])){
    		$password=$_POST['password'];
    }

    require_once("Zend/Soap/Client.php");
    $wsdl_url = "http://localhost:8080/TallerJSP/services/WebServiceProveedor?WSDL";
    $cliente = new Zend_Soap_Client($wsdl_url);

    if (($usuario != "") or ($password != "")){
    	$cadenaLogin = array('usuario'=>$usuario, 'password'=>$password);

    	$respuesta = new stdClass();
    	$respuesta = $cliente->comprobarUsuario($cadenaLogin);

    	$resultado = $respuesta->comprobarUsuarioReturn;
        

        if ($resultado == "si"){
            $_SESSION['username'] = $usuario;
            $_SESSION['session'] = $resultado;
            header('Location: /clientePHP/index.php');
        }else{
            session_unset();
            session_destroy();
            $_SESSION['status'] = 'Usuario Inválido';
            header('Location: /clientePHP/formLogin.php');
        }

    }else{
    	session_unset();
        session_destroy();
        header('Location: /clientePHP/formLogin.php');
    }
?>
