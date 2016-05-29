<?php
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
</BODY>
</HTML>