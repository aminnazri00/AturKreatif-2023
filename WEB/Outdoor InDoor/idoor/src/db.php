<?php
    $servername='localhost';
    $username='nothing';
    $password='toor123!';
    $dbname = "nothing_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }
?> 