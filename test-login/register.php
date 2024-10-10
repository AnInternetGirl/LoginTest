<?php
$nombreC = $_POST['nombreC'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$genero = $_POST['genero'];
if (isset($_POST['interes1'])){
    $interes1 = $_POST['interes1'];
}
if (isset($_POST['interes2'])){
    $interes2= $_POST['interes2'];
}
if (isset($_POST['interes3'])){
    $interes3 = $_POST['interes3'];
}
$foto = $_POST['foto'];
$color = $_POST['color'];
$nivel = $_POST['nivel'];

echo "<h1>Registro de usuario</h1>";
echo "<h2>Registro correcto</h2>";
echo "<br>Nombre completo: ".$nombreC;
echo "<br>Correo Electronico: ".$correo;
echo "<br>Contraseña: ".$contraseña;
echo "<br>Edad: ".$edad;
echo "<br>Fecha: ".$fecha;
echo "<br>Genero: ".$genero;
echo "<br>Intereses: ";
echo "<ul>";
if (isset($_POST['interes1'])){
    echo "<li>".$interes1."</li>";
}
if (isset($_POST['interes2'])){
    echo "<li>".$interes2."</li>";
}
if (isset($_POST['interes3'])){
    echo "<li>".$interes3."</li>";
}
echo "</ul>";
echo "<br>Foto: ".$foto;
echo "<br>Color: ".$color;
echo "<br>Nivel: ".$nivel;
?>