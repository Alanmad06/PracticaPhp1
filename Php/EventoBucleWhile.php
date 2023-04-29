<?php

if ( isset( $_POST['number'] )) {
$number = $_POST['number']; $counter = 1;
while ($counter <= $number) {
echo "<b>$counter</b>.- Los bucles son faciles!<br>\n";
$counter++;

}
echo "Se acabo.\n";
}
?>