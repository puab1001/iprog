<!DOCTYPE html>
<html>
<body style="font-family:sans-serif">
<h1>PHP Funktionen mit Referenzparameter</h1>
<?php
$array = array(3, 1, 5);
echo '<p>Inhalt von $array vor Funktionsaufruf:</p>';
print_r($array);

$array2 = &sortiere ($array);
$array2[] = 'NEU';
echo '<p>Inhalt von $array2 nach Funktionsaufruf:</p>';
print_r($array2);

echo '<p>Inhalt von $array nach Funktionsaufruf:</p>';
print_r($array);

function &sortiere (&$werte) { // Achtung: Referenzen!
  asort ($werte);
  return $werte;
}
?>