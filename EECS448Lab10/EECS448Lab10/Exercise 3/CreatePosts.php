<?php
//access the global array called $_POST to get the values from the text fields
  $user_id = $_POST["user_id"];
  $post_id = $_POST["post_id"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "shujinwu", "eib3Ab9U", "shujinwu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT user_id FROM Users WHERE user_id = '$user_id'";

  if (mysqli_num_rows($mysqli->query($query)) == 0) {
    echo "User ".$user_id. " does not exist. Please check again!<br>";
  }
  else {
    $query2 = "INSERT INTO Posts (author_id, content) VALUES ('$user_id', '$post_id')";
    if ($result = $mysqli->query($query2)) {
      echo "User ".$user_id." successfully created post!<br>";
    }
    else {
      echo "The post failed to create!<br>";
    }
  }

$mysqli->close();
?>

