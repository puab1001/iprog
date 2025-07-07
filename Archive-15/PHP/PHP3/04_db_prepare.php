<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
  <link rel='shortcut icon' href='/images/favicon.ico' type='image/x-icon' />
  <title>Formulartest</title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Default ab 8.1
try
{
$db = new mysqli( 'localhost', 'iprog', 'test', 'iprog' );

?>
<p>Connect erfolgreich!</p>

<?php
$param = isset($_GET["p"]) ? $_GET["p"] : 'CATS';
if (isset($_GET["p"]))
  echo "<p>Inhalt von p : <b>".$_GET["p"]."</b></p>";
else
  echo "<p>Kein Parameter p - Default = 'CATS'</p>";

$sql = "SELECT productid, categoryid, name, imageurl
        FROM Product WHERE categoryid = ?";
?>
<h2>Query mit <b>prepared Statement</b></h2>
<p>Query:<br/><?php echo $sql ?></p>
<?php
$stmt = $db->prepare( $sql );

$stmt->bind_param("s", $param); 
$stmt->execute();
$stmt->bind_result($productid, $categoryid, $name, $imageurl);

$stmt->store_result(); // nur fuer num_rows erforderlich
?>
<h2>Auslesen mit <b>fetch</b></h2>
<p>Es wurden <b><?php echo $stmt->num_rows ?></b> Einträge gefunden</p>
<table class='db'>
<?php
while ($stmt->fetch()) {
  echo "<tr><td>".$productid."</td>
            <td>".$name."</td>
            <td>".$categoryid."</td>
            <td><img src='/images/".$imageurl."' alt='foto' /></td>
        </tr>\n";
}

// Resourcen freigeben
$stmt->close();
$db->close();

} catch(Exception $e) { // Fehlerbehandlung
  echo "Exception aufgetreten:<br/>" . $e->getMessage();
}
?>
</table>
</body>
</html>
