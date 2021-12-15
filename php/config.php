<?php
  $hostname = "localhost:8889";
  $username = "mamp";
  $password = "";
  $dbname = "chatApp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Nepodařilo se připojit k databázi".mysqli_connect_error();
  }
?>
