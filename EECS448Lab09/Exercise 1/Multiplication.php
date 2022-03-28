<?php

echo "<table style='border: solid black' border = 1px>";
  for ($rows = 0; $rows <= 100; $rows++)
  {
    echo "<tr>";
    for ($cols = 0; $cols <= 100; $cols++)
    {
            if ($rows == 0 && $cols > 0)
            {
              echo "<th> $cols </th>";
            }
            else if ($cols == 0 && $rows > 0)
            {
              echo "<th> $rows </th>";
            }
            else if ($rows > 0 && $cols > 0)
            {
              echo "<td>" . $rows * $cols . "</td>";
            }
            else
            {
              echo "<td>  </td>";
            }
    }
    echo "</tr>";
  }
  echo "</table>";
  
?>