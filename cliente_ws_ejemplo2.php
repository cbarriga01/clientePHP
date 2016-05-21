<?php
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
        ?>
        <h1>Resultado Busqueda</h1>
        <p>La busqueda es: <?php print_r($cliente->busquedaSimpleCont(array("busqueda"=>$_GET['textoBusqueda']))); ?></p><br/>

        <?php
        $array = $cliente->busquedaSimpleCont(array("busqueda"=>$_GET['textoBusqueda']));
        foreach ($array as $valor) {
            echo "Valor: $valor.run<br />\n";
        }

        $array = array("uno", "dos", "tres");
        reset($array);
        while (list(, $valor) = each($array)) {
            echo "Valor: $valor<br />\n";
        }


        $vaar = get_object_vars($cliente->busquedaSimpleCont(array("busqueda"=>$_GET['textoBusqueda'])));

        echo $vaar;

        //echo "Valor: ".$vaar->direccion."<br />\n";




        ?>
        <?php
    }
}
?>