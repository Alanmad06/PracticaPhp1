<?php

$Cantidad=$_POST['Cantidad'];
if (isset($_POST['opc1'])) {
  $opcionSeleccionada = $_POST['opc1'];
  if ($opcionSeleccionada == 'opc1') {
    $result=50*$Cantidad ;
    $result+=$result*.16 ;
echo '<table border="0">';
echo '<tr bgcolor="#DBDB70">';
echo '<td>';
echo '<strong>Codigo</strong>';
echo '</td>';
echo '<td>';
echo '<strong>Precio</strong>';
echo '</td>';
echo '</tr>';

echo '<tr bgcolor="#38B0DE">';
echo '<td>';
echo '<center><B>111</center></B>';
echo '</td>';
echo '<td>';
echo '<center><B>'.$result.'</center></B>';
echo '</td>';
echo '</tr>';
echo '</table>';
  } elseif ($opcionSeleccionada == 'opc2') {
    $result=30*$Cantidad;
    $result+=$result*.16 ;

echo '<table border="0">';
echo '<tr bgcolor="#DBDB70">';
echo '<td>';
echo '<strong>Codigo</strong>';
echo '</td>';
echo '<td>';
echo '<strong>Precio</strong>';
echo '</td>';
echo '</tr>';

echo '<tr bgcolor="#38B0DE">';
echo '<td>';
echo '<center><B>222</center></B>';
echo '</td>';
echo '<td>';
echo '<center><B>'.$result.'</center></B>';
echo '</td>';
echo '</tr>';
echo '</table>';
  } elseif ($opcionSeleccionada == 'opc3') {
    $result=40*$Cantidad;
    $result+=$result*.16 ;

echo '<table border="0">';
echo '<tr bgcolor="#DBDB70">';
echo '<td>';
echo '<strong>Codigo</strong>';
echo '</td>';
echo '<td>';
echo '<strong>Precio</strong>';
echo '</td>';
echo '</tr>';

echo '<tr bgcolor="#38B0DE">';
echo '<td>';
echo '<center><B>333</center></B>';
echo '</td>';
echo '<td>';
echo '<center><B>'.$result.'</center></B>';
echo '</td>';
echo '</tr>';
echo '</table>';
  }




} else {
  echo "No se ha seleccionado ninguna opción";
}


?>