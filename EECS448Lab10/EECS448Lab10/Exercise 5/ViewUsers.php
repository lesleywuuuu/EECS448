<?php
//access the global array called $_POST to get the values from the text fields
  $mysqli = new mysqli("mysql.eecs.ku.edu", "shujinwu", "eib3Ab9U", "shujinwu");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT user_id FROM Users;";

  if ($result = $mysqli->query($query)) {
		echo "<th> Table of current users</th>";
		echo "<table>";

		/* fetch associative array */
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["user_id"] . "</td></tr>";
		}

		echo "</table>";
	}

  /* close connection */
  $mysqli->close();
?>

