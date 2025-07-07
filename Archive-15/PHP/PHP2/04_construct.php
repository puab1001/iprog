<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>Constructor Demo</title>
</head>
<body style="font-family:sans-serif">
<h1>Constructor Demo</h1>
<?php
  error_reporting(E_ALL);

class Test {
  private $v = 1;

  public function __construct($x = 0) {
    echo "<p style='color:green'>__construct &rarr; x=$x<p>\n";
    $this->v = $x;
  }
  public function __destruct() {
    echo "<p style='color:red'>__destruct &rarr; v=$this->v<p>\n";
  }
  public function __toString() {
          return "toString: v = $this->v";
  }
  public function hallo() {
    echo "Hallo v=".$this->v." <br>\n";
  }
} // class Test

$my_test = new Test();
$my_test -> hallo();

$my_test = new test(5);
$my_test -> hallo();

echo "Das ist my_test: $my_test";
?>
</body>
</html>
