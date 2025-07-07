<?php
 ini_set("include_path", ".;D:\Smarty\libs");

 require_once 'db/CDB.php';
 require_once 'db/CProductDB.php';
 require_once 'Smarty.class.php';

 $db = CDB::connect();
 if ($db == null) {
   exit; // hier fehlt Aufruf einer Errorpage
 }

 $param = isset($_GET["p"]) ? $_GET["p"] : 'CATS';
 $prods = $param == 'all'
          ? CProductDB::find_all ($db)
		      : CProductDB::find_by_category ($db, $param);
 $db->close();

use Smarty\Smarty; // ab Smarty 5 erforderlich : Namespace
$smarty = new Smarty();

 $smarty->assign("products", $prods);
 $smarty->assign("phpversion",  phpversion());
 $smarty->display("index.tpl");
?>