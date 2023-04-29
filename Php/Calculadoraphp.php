<?php
if(isset($_POST['caja'])){
$caja=$_POST['caja'];
if($caja==''){
echo '<font color="red"><b>Ingrese un valor</b></font>';
}else{
$resul="echo $caja;";
echo '<table border="0">';
echo '<tr bgcolor="#DBDB70">';
echo '<td>';
echo '<strong>Operaci&oacute;n</strong>';
echo '</td>';
echo '<td>';
echo '<strong>Resultado</strong>';
echo '</td>';

echo '</tr>';
echo '<tr bgcolor="#38B0DE">';
echo '<td>';
echo '<center><B>'.$caja.'</center></B>';
echo '</td>';
echo '<td>';
echo '<center><B>';
eval($resul);
echo '</center></B>';
echo '</td>';
echo '</tr>';
echo '</table>';
}
}//isset
?>