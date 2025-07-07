<?php
# Zum Aufrufen von der Konsole aus mit: php ...
$a1 = array ('Harry', 44, 'Hirschweg', 12);
$a1[4] = '66482';
$a1[] = 'Noch ein Wert';

$a1[27]= 'Test';
$a1[] = 'Noch ein Test';

echo "\n***************************** \n\na1=";
print_r($a1);

echo "\n***************************** \n\n";
$s = readline("Weiter?");
echo "\n***************************** \n\na2=";

$a2 = array ('name'=>'Harry', 'alter'=> 44, 
             'strasse'=> 'Hirschweg', 'hnr'=> 12);
$a2[5] = '66482';
$a2[] = 'ZW';

print_r($a2);
$s = readline("Weiter?");
echo "\nKopie mit a3 = a2:";
echo "\n***************************** \n\na2=";
$a3 = $a2; // Zuweisung kopiert das Array
$a3['name'] = 'Hugo';
print_r($a2);
echo "\n\na3=";
print_r($a3);

echo "\n***************************** \n\n";
$s = readline("Weiter?");
echo "\n***************************** \n\n";

$z = array(5, 4, 3, 2, 1);

print_r($z);

echo "\n***\n\n";
unset ($z[2]);

print_r($z);
exit;

?>
