<?php
  $hostname = "sql313.infinityfree.com";
  $username = "if0_35824787";
  $password = "20ChatZaap21";
  $dbname = "if0_35824787_chatzaap";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
