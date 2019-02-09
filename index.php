<html>
  </head>
  <body>


    <?php

    $variable_a = 4;

    $variable_b = 3;

  echo "<table>";
  for ($i=0; $i < $variable_a; $i++ ) {

    echo "<tr>";
    for ($j = 0; $j < $variable_b; $j++ ) {
      echo "<td>";
      echo $i." ".$j;
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

     ?>

  </body>
</html>
