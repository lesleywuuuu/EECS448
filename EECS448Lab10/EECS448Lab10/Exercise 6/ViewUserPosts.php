<?php
  //access the global array called $_POST to get the values from the text field
  $user_id = $_POST["user_id"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "shujinwu", "eib3Ab9U", "shujinwu");
  /* check connection */
/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
    $query = "SELECT content FROM Posts WHERE author_id='".$user_id."'";
    if($result = $mysqli->query($query)){
      echo "<th>User ".$user_id. "'s Posts</th>";
      echo "<table border='1'>";
      while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["content"] . "</td></tr>";
      }
    }
    else{
      echo "User ".$user_id." does not have posts";
    }
  /* close connection */
  $mysqli->close();
?>
