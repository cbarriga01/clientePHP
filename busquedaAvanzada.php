<?php
/**
 * Created by PhpStorm.
 * User: Kal-El
 * Date: 11-05-2016
 * Time: 8:38
 */

// Esto nos sirve para incluir Zend de forma directa
set_include_path(get_include_path() .
    PATH_SEPARATOR .
    realpath(dirname(__FILE__) . "/../service/application/"));
?>

<?php
$run="";
$nombre="";
$apellido="";
$mail="";
$telefono="";
$pais="";
$region="";
$ciudad="";
$direccion="";

if((isset($_GET['run'] ))){
    $run=$_GET['run'] ;
}
if((isset($_GET['nombre']))){
    $nombre=$_GET['nombre'];
}
if((isset($_GET['apellido']))){
    $apellido=$_GET['apellido'];
}
if((isset($_GET['mail'] ))){
    $mail=$_GET['mail'] ;
}
if((isset($_GET['telefono'] ))){
    $telefono=$_GET['telefono'] ;
}
if((isset($_GET['pais'] ))){
    $pais=$_GET['pais'] ;
}
if((isset($_GET['region'] ))){
    $region=$_GET['region'] ;
}
if((isset($_GET['ciudad'] ))){
    $ciudad=$_GET['ciudad'] ;
}

if((isset($_GET['direccion'] ))){
    $ciudad=$_GET['direccion'] ;
}

$busquedaAvanzada="";
    require_once("Zend/Soap/Client.php");
    $wsdl_url = "http://localhost:8080/TallerJSP/services/WebServiceProveedor?WSDL";
    $cliente = new Zend_Soap_Client($wsdl_url);

    if ( ($run != "") or ($nombre != "") or ($apellido != "") or ($mail != "") or ($telefono != "") or ($pais!= "")
        or ($region != "")or ($ciudad != "")or ($ciudad != "")) {
        // $empresa= array('empresauid'=>1);
        $contacto=array('run'=>$run, 'nombre'=>$nombre,'apellido'=>$apellido,'mail'=>$mail,'telefono'=>$telefono,'pais'
        =>$pais,'region'=>$region,'ciudad'=>$ciudad,'direccion'=>$direccion);
        echo json_encode($contacto);
        $busquedaAvanzada=json_encode($contacto);
        ?>
        <h1>Resultado Busqueda</h1>
        <p>La busqueda  es: <?php print_r( $cliente->busquedaAvanzada(array("busquedaAvanzada"=>$busquedaAvanzada)));
            ?></p><br/>

    <?php
}
?>



