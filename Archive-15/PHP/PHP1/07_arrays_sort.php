<?php
# Zum Aufrufen von der Konsole aus mit: php ...
echo "Bitte Zahlen getrennt durch Komma eingeben: ";

if (!defined ("STDIN")) {
	echo "<br/>Aufruf von Konsole erforderlich!";
	return;
}
$line = trim(fgets(STDIN));
$zahlen = explode(",", $line);

echo "\n***************************** \n\n";
echo "Mit print_r:\n";

print_r ($zahlen);

echo "\n*** Sortieren mit 'asort' ***\n";
asort($zahlen);

echo "\n***************************** \n\n";
echo "1. Mit foreach(zahlen as zahl):\n";

foreach ($zahlen as $zahl) {
  echo " : $zahl \n";
}

$s = readline("\nWeiter?");
echo "\n***************************** \n\n";
echo "2. Mit for(i = 0; i < count; i++):\n";

for ($i = 0; $i < count($zahlen); $i++) {
  echo "zahlen[$i] => $zahlen[$i] \n";
}
$s = readline("\nWeiter?");
echo "\n***************************** \n\n";
echo "3. Mit print_r:\n";

print_r ($zahlen);

$s = readline("\nWeiter?");
echo "\n***************************** \n\n";
echo "Sortieren mit 'sort' statt 'asort':\n";

sort($zahlen); // neue Vergabe der Indizes
print_r($zahlen);

$s = readline("\nWeiter?");
echo "\n***************************** \n\n";
$a1 = array ('Harry', 44, 'Acht', 'zupfen', 'hirschweg', 12, 'Ärger','Zahl');
print_r($a1);
asort ($a1);
print_r($a1);
$s = readline("\nWeiter?");
echo "\n***************************** \n\n";
$a1 = array ('name'=>'Harry', 'alter'=>44, 'Straße'=> 'hirschweg');
print_r($a1);
sort ($a1);
print_r($a1);
echo "\n***************************** \n\n";

?>
