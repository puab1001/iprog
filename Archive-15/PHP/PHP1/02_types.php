<?php
# Zum Aufrufen von der Konsole aus mit: php ...
echo "\n***************************** \n\n";

$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$an_int = 12;     // an integer
$a_float = 0.7;   // a float

echo "a_bool  >$a_bool< \t is a ", gettype($a_bool), "\n";
echo "a_str   >$a_str< \t is a ", gettype($a_str), "\n";  
echo "an_int  >$an_int< \t is a ", gettype($an_int), "\n"; 
echo "a_float >$a_float< \t is a ", gettype($a_float), "\n"; 

echo "\n***************************** \n\n";
// Pruefen ob int vorliegt
echo "an_int: $an_int \n";
echo "is_int: ", is_int($an_int) , "\n\n";

// Pruefen ob bool vorliegt
echo "a_bool: $a_bool \n";
echo "is_bool: ", (is_bool($a_bool)) , "\n\n";

echo "TRUE: ".TRUE." \n";
echo "FALSE: ".FALSE." \n";
echo "is_bool: ", (is_bool(FALSE)) , "\n\n";

$a_bool += 4;
echo "a_bool: $a_bool \n";
echo "is_bool: ", is_bool($a_bool) , "\n";
echo "is_int: ", is_int($a_bool) , "\n\n";

if ($a_bool)
  echo "a_bool is TRUE!\n"; 
else
  echo "a_bool is FALSE!\n"; 
echo "\n***************************** \n\n";
exit;

?>
