<?php

  include_once("../products/product.php");
  include_once("../config/database.php");

$database = new Database();
$db = $database->getConnection();

if ($_POST) {
  $newObject = new $_POST['Type-Switcher']($db);
  
  if ($newObject->getSpecs($_POST)) {
    header('Location: ../index.php');
  } else {
    header('Location: ../add-product.html');
  }
}

