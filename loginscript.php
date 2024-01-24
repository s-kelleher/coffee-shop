    <!-- Log in Function-->
<?php
session_start();
include("database-connector.php");
?>
<?php
$msg = "";
if (isset($_POST['submitBtnLogin'])) {
  $username = trim($_POST['username']); // Get username from login form
  $password = trim($_POST['password']); // Get password from login form
  if ($username != "" && $password != "") {
    try {
      $query = "select * from users where users.username = :username and users.password = :password"; //Select all users table data
      $stmt = $db->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($count == 1 && !empty($row)) { 
        $_SESSION['sess_user_id']   = $row['user_id']; // Assign sess_user_id
        $_SESSION['sess_username'] = $row['username']; //Assign sess_username
        header("location: index.php");
        exit();
      } else {
        $msg = "Invalid username and password!";        //Error Message
      }
    } catch (PDOException $e) {
      echo "Error : " . $e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";    // Error Message
  }
}
?>