<?php
// Database Configuration
define("DB_HOST", "ec2-54-160-109-68.compute-1.amazonaws.com");
define("DB_NAME", "d4kd2940j25ih7");
define("DB_USER", "ehyypqhgdcuvni");
define("DB_PASSWORD", "3dc34d9a28b1ece658ee12b0f1abcf740e353559ad0557efb3de9c458ac7805c");

// we are creating a singleton class for the database, to call when needed
class Database
{
  private static $db;
  private $connection;
  private function __construct()
  {
    $this->connection = new PDO(
      "pgsql:host=" . DB_HOST . ";dbname=" . DB_NAME,
      DB_USER,
      DB_PASSWORD,
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
      ]
    );
  }
  function __destruct()
  {
    // $this->connection->close();
  }
  public static function getConnection()
  {
    if (self::$db == null) {
      self::$db = new Database();
    }
    return self::$db->connection;
  }
}

// assign database
$db = Database::getConnection();
