<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
  <link rel='shortcut icon' href='/images/favicon.ico' type='image/x-icon' />
  <title>DB - Test</title>
</head>

<body>
<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Default ab 8.1
mysqli_report(MYSQLI_REPORT_OFF);
// DB-Verbindung oeffnen
$db = new mysqli( 'localhost', 'iprog', 'test', 'iprog' );

if ($db->connect_errno != 0) { // Meldung, falls Fehler
  echo '<p style="color:red">Fehler trat auf !<br/> '.
       'mysqli_connect_errno : <b>' .$db->connect_errno. "</b><br/>\n".
       'mysqli_connect_error : <b>' .$db->connect_error. "</b></p>\n";
  exit;
}
?>
<p>Connect erfolgreich mit "<?php echo $db->host_info; ?>" </p>

<?php
if (isset($_GET["p"]))
  echo "<p>Inhalt von p : <b>".$_GET["p"]."</b></p>";
else
  echo "<p>Kein Parameter p - Default = 'CATS'</p>";

$param = isset($_GET["p"]) ? $_GET["p"] : 'CATS';

$sql = "SELECT *
        FROM Product WHERE categoryid = '$param' ";
?>
<p>Query:<br/><?php echo $sql; ?> </p>
<h2>Auslesen mit <b>fetch_assoc</b></h2>
<table class='db'>
<?php
 $erg = $db->query( $sql );
 echo "<p>Es wurden <b>$erg->num_rows</b> Einträge gefunden</p>";
 while ($zeile = $erg->fetch_assoc()) {
  echo "<tr><td>".$zeile['productid']."</td>
            <td>".$zeile['name']. "</td>
            <td>".$zeile['categoryid']. "</td>
            <td><img src='../images/".$zeile['imageurl']."' alt='foto' /></td>
        </tr>\n";
 }
 $erg->close();
?>
</table>

<h2>Auslesen mit <b>fetch_object</b></h2>
<?php
 $erg = $db->query( $sql );
 echo "<p>Es wurden <b>$erg->num_rows</b> Einträge gefunden!</p>";
 echo "<table class='db'>";
 while ($zeile = $erg->fetch_object()) {
  echo "<tr><td>".$zeile->productid."</td>
            <td>".$zeile->name."</td>
            <td>".$zeile->categoryid."</td>
            <td><img src='../images/".$zeile->imageurl."' alt='foto' /></td>
        </tr>\n";
 }
 $erg->close();
?>
</table>

<h2>Auslesen mit <b>fetch_all(MYSQLI_ASSOC)</b></h2>
<table class='db'>
<?php
 $erg = $db->query( $sql );
 $zeilen = $erg->fetch_all(MYSQLI_ASSOC);
 
 echo "<p>Es wurden <b>$erg->num_rows</b> Einträge gefunden</p>";
 $erg->close();
 
 foreach ($zeilen as $zeile) {
  echo "<tr><td>".$zeile['productid']."</td>
            <td>".$zeile['name']. "</td>
            <td>".$zeile['categoryid']. "</td>
            <td><img src='../images/".$zeile['imageurl']."' alt='foto' /></td>
        </tr>\n";
 }
?>
</table>

<?php
 // Verbindung schliessen
 $db->close();
?>
</body>
</html>
