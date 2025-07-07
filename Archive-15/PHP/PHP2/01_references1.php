<!DOCTYPE html>
<html>
<body style="font-family:sans-serif">
<h1>PHP Funktionen mit Referenzrückgabe</h1>
<?php
  error_reporting(E_ALL);
  
  echo "<hr/>"; 
  $z = gib_referenz('Eins');
  print_r($z);
  echo "<hr/>"; 

  $z[] = 'Zwei';
  print_r($z);
  echo "<hr/>"; 

  $z = &gib_referenz('Drei');
  print_r($z);

  echo "<hr/>"; 

// =========== function gib_referenz ================
function &gib_referenz($v) {
  static $collection = array("Null");
  $collection[] = $v; // add
  return $collection;
}

?>
</body>
</html>
