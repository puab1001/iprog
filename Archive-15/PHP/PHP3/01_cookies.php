<?php
$cname="Mein_Cookie";
if (isset ($_COOKIE[$cname])) {
  $neu_gesetzt = false;
  $cookie = $_COOKIE[$cname];
  setcookie($cname, $cookie + 1, time() + 60*60);
} else {
  $neu_gesetzt = true;
  setcookie($cname, "1", 0);
} 
// session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Cookies Demo</title>
</head>
<body style="font-family:sans-serif">
<h1>Cookies Demo</h1> 

<?php
if ($neu_gesetzt)
  echo "<h2>Cookie '$cname' ist neu gesetzt!</h2>";
else
  echo "<h2>Cookie '$cname' gelesen, Wert: '$cookie' </h2>";

if (isset ($_COOKIE["PHPSESSID"]))
  echo '<h2>$_COOKIE["PHPSESSID"]='.$_COOKIE["PHPSESSID"]."</h2>";
// else
//  echo '<h2>$_COOKIE["PHPSESSID"] ist nicht gesetzt!';
?>
</body>

</html>
