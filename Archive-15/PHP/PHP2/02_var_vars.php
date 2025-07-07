<!DOCTYPE html>
<html>
<body style="font-family:sans-serif">
<?php
$a  = "hello";
$$a = "world";

echo "<p>1. $a $hello </p>\n";
echo "<p>2. $a  " . $$a . " </p>\n";

echo "<p>3. $a  $$a </p>\n";

echo "<p>4. $a ${$a} </p>\n";

$a = "hello";
$hello = "world";
echo "5. $a ${$a} <br>\n";

# Noch ein Beispiel
$version = phpversion();
$x = "sion";
echo "<p>** Version:  ${'ver'.$x} </p>\n";

?>
</body>