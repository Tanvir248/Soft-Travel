<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
mysqli_report(MYSQLI_REPORT_ALL);

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $password = $_POST['password']; 

    $conn = new mysqli('localhost', 'root','', 'travel');

    
    if ($conn->error) {
      die('Connection failed: ' .$conn->connect_error);
    }else{
          $stmt = $conn->prepare('insert into sing_in(fullName, email, userName, password, date) values ("'.$fullName.'", "'.$email.'", "'.$userName.'", "'.$password.'","'.date('Y-m-d H:i:s').'")');
          $stmt->execute();
          echo 'Inserted successfully';
          $stmt->close();
          header('Location: login.html');
        }
?>