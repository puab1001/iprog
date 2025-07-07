<?php
$a_float = 4.2;
# Beispiel PHP Here-Document
$str = <<< FERTIG
Beispiel fuer Text
Mehrere Zeilen mit unterschiedlichen
Anfuehrungszeichen: " auch solchen' und Variablen,
Auswirkungen:
\$a_float = "$a_float"
==========================================
FERTIG;
echo "$str\n";


echo "Alternative:\n";
$str = "
Beispiel fuer Text
Mehrere Zeilen mit unterschiedlichen
Anfuehrungszeichen: \" auch solchen' und Variablen,
Auswirkungen:
\$a_float = \"$a_float\"
==========================================
";

echo "$str\n";

?>
