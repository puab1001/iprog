<!DOCTYPE html>
<html>
<head> <title>MVC Demo</title> 
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
 require_once 'db/CDB.php';
 require_once 'db/CProductDB.php';
 $db = CDB::connect();
 if ($db == null) {
   echo "<p style='color:red'>Keine DB-Verbindung</p>";
   exit;
 }
?>

<table>
<?php
 $param = isset($_GET["p"]) ? $_GET["p"] : 'CATS';
 $prods = CProductDB::find_by_category ($db, $param);
 $db->close();

 // View:
 echo "<p><b>" . count($prods) . "</b> Einträge gefunden</p>";
 echo "<tr><th>name</th><th>description</th><th>categoryid</th></tr>\n";
 foreach ($prods as $p) {
   echo "<tr><td>$p->name</td>
             <td>$p->description</td>
			       <td>$p->categoryid</td>
             <td><img src='/images/".$p->imageurl."' alt='foto'/></td>
			   </tr>\n";
 }
?>
</table>
</body>
</html>