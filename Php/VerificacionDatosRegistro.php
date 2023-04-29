
<?php
// Programa en php que recibe los datos del formulario y los muestra en forma de tabla
 error_reporting(0);  
// Recibir los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$nombre_completo = $_POST['nombre_completo'];
$contrasena = $_POST['contrasena'];
$repetir_contrasena = $_POST['repetir_contrasena'];
$correo_electronico = $_POST['correo_electronico'];
$sexo = $_POST['sexo'];
$hobbies = $_POST['hobbies'];
$estado_civil = $_POST['estado_civil'];
$calle = $_POST['calle'];
$numero_interior = $_POST['numero_interior'];
$colonia = $_POST['colonia'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];

if(empty($nombre_usuario) || empty($nombre_completo) || empty($contrasena) || empty($repetir_contrasena) || empty($correo_electronico) || empty($sexo) || empty($hobbies)  || empty($estado_civil) || empty($calle) || empty($numero_interior) || empty($colonia) || empty($estado) || empty($pais) || empty($cp)) {
  echo "Falta información en uno o más campos.";

}else {

if ($contrasena != $repetir_contrasena) {
    echo "<script>alert('Las contraseñas no coinciden');</script>";
    echo "<script>window.location.href='formulario.html';</script>";
    exit();
}


echo "<table border='1'>";
echo "<tr><td>Nombre de usuario</td><td>$nombre_usuario</td></tr>";
echo "<tr><td>Nombre completo</td><td>$nombre_completo</td></tr>";
echo "<tr><td>Contraseña</td><td>$contrasena</td></tr>";
echo "<tr><td>Correo electrónico</td><td>$correo_electronico</td></tr>";
echo "<tr><td>Sexo</td><td>$sexo</td></tr>";
echo "<tr><td>Hobbies</td><td>";
// Mostrar los hobbies separados por comas
if (is_array($hobbies)) {
    echo implode(", ", $hobbies);
} else {
    echo "Ninguno";
} 

echo "</td></tr>";
echo "<tr><td>Estado civil</td><td>$estado_civil</td></tr>";
echo "<tr><td>Calle</td><td>$calle</td></tr>";
echo "<tr><td>Número interior</td><td>$numero_interior</td></tr>";
echo "<tr><td>Colonia</td><td>$colonia</td></tr>";
echo "<tr><td>Estado</td><td>$estado</td></tr>";
echo "<tr><td>País</td><td>$pais</td></tr>";
echo "<tr><td>CP</td><td>$cp</td></tr>";
echo "</table>";

}



?>
