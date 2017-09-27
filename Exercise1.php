<?php
//access the global array called $_POST to get the values from the text fields
// $name = $_POST["name"];
// $email = $_POST["email"];
//
// echo "Name: " . $name . "<br>";
// echo "Email: " . $email . "<br>";
$cols = 100;
$rows = 100;
echo "<table border=\"1\">";

        for ($r =0; $r <= $rows; $r++)
        {

            echo'<tr>';

            for ($c = 0; $c <= $cols; $c++)
            {
              // $int =(int)$c;
              // $int =(int)$r;
              if($r==0 && $c==0)
              {
                echo '<td>' ."".'</td>';
              }
              else if($r==0)
              {
                echo '<td>' .$c.'</td>';
              }
              else if($c==0)
              {
                echo '<td>' .$r.'</td>';
              }
              else
              {
                echo '<td>' .($c*$r).'</td>';
              }
            }
           echo '</tr>'; // close tr tag here

        }

  echo"</table>";

?>
