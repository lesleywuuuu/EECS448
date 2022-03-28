<?php
  //access the global array called $_POST to get the values from the text field
  $user_id = $_POST["user_id"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "shujinwu", "eib3Ab9U", "shujinwu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "INSERT INTO Users (user_id) VALUES ('$user_id')";

  if ($user_id == NULL){
    echo "Please enter vaild User ID! <br>";
  }
  else if($result = $mysqli->query($query)){
      echo "User ".$user_id." successfully added to the database!<br>";
  }
  else{
      echo "User ".$user_id." failed to added(already exist)... Please check User ID again!<br><br>";
  }

  /* free result set */
  $result->free();
  /* close connection */
  $mysqli->close();
?>

