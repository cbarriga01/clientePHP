<?php
	echo '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">';
	set_include_path(get_include_path() .
    PATH_SEPARATOR .
    realpath(dirname(__FILE__) . "/../service/application/"));

	require_once("Zend/Soap/Client.php");

    $wsdl_url = "http://localhost:8080/TallerJSP/services/WebServiceProveedor?WSDL";

    $usuario = "";
    $password = "";

    if (isset($_GET['usuario'])){
    		$usuario=$GET['usuario'];
    		echo $usuario;
    }
    if (isset($_GET['password'])){
    		$usuario=$GET['password'];
    		echo $password;
    }

    $cliente = new Zend_Soap_Client($wsdl_url);

    if (($usuario != "") or ($password != "")){
    	$cadenaLogin = array('usuario'=>$usuario, 'password'=>$password);

    	$respuesta = new stdClass();
    	$respuesta = $cliente->comprobarUsuario($cadenaLogin);

    	$resultado = $respuesta->comprobarUsuarioReturn;

    	echo "Resultado = ".$resultado;
    }else{
    	echo "Datos erroneos";
    }
?>
