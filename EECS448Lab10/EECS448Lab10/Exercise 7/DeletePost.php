<?php
  //access the global array called $_POST to get the values from the text fields
  $delete_post = $_POST["delete_post"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "shujinwu", "eib3Ab9U", "shujinwu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT post_id FROM Posts'";
   foreach ($delete_post as $post_id){
     $query2 = "DELETE FROM Posts WHERE post_id='$post_id'";
      if ($result = $mysqli->query($query2)){
        echo "User ".$user_id." delete posts successsfully<br>"; 
      }
      else{
        echo "User ".$user_id." failed delete posts<br>";
      }
   }
   /* close connection */
   $mysqli->close(); 
  
?>