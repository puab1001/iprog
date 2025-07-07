<!DOCTYPE html>
<html>
<body style="font-family:sans-serif">
<h1>Variable PHP Funktionen</h1>
<?php

if (!isset($_GET['p'])) {
	echo "Kein Wert für Parameter p übergeben!";
	exit;
}
$func = $_GET['p'];
// $func();
if (!function_exists($func)) 
  echo "Funktion '$func' existiert nicht!";
else
  $func();

// =============================================

function f1() {
	echo "<p>=> In f1()</p>";
}

function f2($arg = 'X') {
	echo "<p>=> In f2(); der Parameter ist '$arg'</p>";
}
?>
</body>
</html>