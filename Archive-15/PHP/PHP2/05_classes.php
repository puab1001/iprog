<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>PHP OO</title>
</head>
<style>h1 { font-size: 1.1em; }</style>
<body style="font-family:sans-serif">
<?php
error_reporting(E_ALL);
header("Content-Type: text/html; charset=UTF-8");

# Beispiel: Klasse 
class Hotel {
  private $name;
  private $zimmer = 0;
  private int $belegt = 0; // strenge Prüfung, wenn Typen angegeben werden

  public function __construct($n, $z = 7) {
    echo "<p style='color:green'>Konstruktor &rarr; '$n' - $z</p>\n";
    $this->name = $n;
    $this->zimmer = $z;
  }
  public function __destruct() {
    echo "<p style='color:red'>Destruktor &rarr; Hotel '$this->name' aufgelöst!</p>\n";
  }
  public function __toString() {
    return "* Hotel '$this->name', $this->zimmer Zimmer - $this->belegt belegt";
  }
  public function buchen($z = 1) {
    echo "buchen mit z=$z <br/>\n";
    $this->belegt += $z;
  }
}

# Beispiel: Unterklasse 
class Sporthotel extends Hotel{
  private $sarten;

  public function __construct($n, $z = 0, $s) {
    echo "<p style='color:green'>Konstruktor &rarr; '$n' - $z - $s </p>\n";
    parent::__construct ($n, $z);
    $this->sarten = $s;
  }
  public function __toString() {
    return parent::__toString() . " * Sportarten: $this->sarten <br>";
  }
}

# Hauptprogramm
echo "<h1>Erstes Hotel</h1>\n";
$my_test = new Hotel("Park Hotel");
$my_test->buchen(2);
echo $my_test;
$meine_hotels[] = $my_test;

echo "<h1>Zweites Hotel</h1>\n";
$my_test = new Hotel("Hilton", 98);
$my_test->buchen(1);
echo $my_test;
$meine_hotels[] = $my_test;

echo "<h1>Sporthotel</h1>\n";
$my_test = new Sporthotel("Im Grün", 20, "Golf");
$my_test->buchen(1);
echo $my_test;
$meine_hotels[] = $my_test;

echo "<h1>== Jetzt alle ==</h1>\n";
foreach ($meine_hotels as $h)
  echo $h . "<br/>";
?>
</body>