<?php

$host = "ec2-54-160-109-68.compute-1.amazonaws.com";
$user = "ehyypqhgdcuvni";
$password = "3dc34d9a28b1ece658ee12b0f1abcf740e353559ad0557efb3de9c458ac7805c";
$dbname = "d4kd2940j25ih7";
$port = "5432";

try {
  //Set DSN data source name
  $dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
