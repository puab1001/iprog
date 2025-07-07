<?php
class CProductDB {
  public $productid;
  public $categoryid;
  public $name;
  public $description;
  public $imageurl;

  public static function find_by_category ($db, $id = "CATS") {

    $sql = 'SELECT productid, categoryid, name, description, imageurl
            FROM Product WHERE categoryid = ?
			ORDER BY name';

    $stmt = $db->prepare( $sql );

    $stmt->bind_param("s", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $products = array();
    while ($zeile = $result->fetch_assoc()) {
      $p = new CProductDB($zeile);
      $products[$p->productid] = $p;
    }
    $stmt->close();
    return $products;
  }
  
  public static function find_all ($db) {

    $sql = 'SELECT * FROM Product ORDER BY name';

    $result = $db->query($sql);
    
    $products = array();
    while ($zeile = $result->fetch_assoc()) {
      $p = new CProductDB ($zeile);
      $products[$p->productid] = $p;
    }
    return $products;
  }
  
  public function __construct($zeile) {
    if ($zeile != null) 
    foreach ($zeile as $key => $value)
      $this -> $key = $value;
  }
}
?>

