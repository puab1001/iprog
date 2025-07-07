<?php
# Zum Aufrufen von der Konsole aus mit: php ...
# Beispiel: Casts
echo "\n***************************** \n\n";

$x = "4";     // 4x     
echo '$x=', $x, "\t=> ", gettype($x), "\n";
$x++;
echo '$x=', $x, "\t=> ", gettype($x), "\n";

$x += 3.1;
echo '$x=', $x, "\t=> ", gettype($x), "\n";

echo "\n***************************** \n\n";
$s = readline("Weiter?");

# Vorsicht bei typ float/double 0.1 = 1e-1
$a_float = (0.1 + 0.7) * 10;

if ($a_float == 8)
  echo "$a_float ist 8 !\n";
else
  echo "$a_float ist nicht 8 !\n";

echo "\n";

echo "a_float $a_float ist vom Typ: ";
echo gettype($a_float), "\n"; 

# Funktion floor($w) -abrunden. 
# Funktion ceil($w)  -aufrunden. 
echo "$a_float ist abgerundet:\t", floor ($a_float), "\n";
echo "$a_float ist aufgerundet:\t", ceil ($a_float), "\n";

$s = readline("Weiter?");
# Beispiel: Konstanten
echo "\n***************************** \n\n";

define ("HIER", "HS KL");
echo HIER, "\n";

echo "Ist HIER gesetzt? ", 
     defined('HIER') ? "Ja" : "Nein", "\n";

echo "\n***************************** \n\n";
echo PHP_VERSION, "\n";
echo PHP_OS, "\n";
echo "\n***************************** \n";

?>
