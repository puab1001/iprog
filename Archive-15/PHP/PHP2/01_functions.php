<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<body style="font-family:sans-serif;font-size:1.5em">
<p>PHP Funktionen</p>
<?php
  error_reporting(E_ALL);
  
  // echo '<p>== Aufruf von: demo ("TT", 5)</p>';
  // demo ("TT", 5);

  echo '<p>== Aufruf von: dEmO ("TT", 3, 4, 5 , 6)</p>';
  dEmO ("TT", 9, "4", 5 , 6);
  
// =========== function demo ================

function demo ($a, int $b = 47, string $c = 'huhu') {
  echo "<p>===== in demo() =====</p>\n"; 

  echo '$a= '.$a.'<br>';
  echo '$b= '.$b.'<br>';
  echo '$c= '.$c.'<br>';

  $anzargs = func_num_args();
  echo "<p>Anzahl Argumente: $anzargs</p>\n";
    
  for ($i=0; $i < $anzargs; $i++) 
    echo "<p>** Argument $i: " . func_get_arg($i) . "</p>";
}

?>
</body>
</html>
