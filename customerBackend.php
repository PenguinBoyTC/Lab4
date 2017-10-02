<?php 

$username = $_POST['username'];

$password = $_POST['password'];

$number1 = $_POST['number1'];

$number2 = $_POST['number2'];

$number3 = $_POST['number3'];

$shipping = $_POST['shipping'];

$subtotal1 = $number1*2;

$subtotal2 = $number2*4;

$subtotal3 = $number3*6;

$totalcost = $subtotal1+$subtotal2+$subtotal3+$shipping;

echo "<center><div><h1 id='Order'style='color:blue;'>Your order information</h1>";
echo "<p>User Name: " . $username . "</p>";
echo "<p>Password: " . $password . "</p></div></center>";
    echo "<center><table border=\"1\">";
        for ($r =0; $r <= 5; $r++)
        {
            echo'<tr>';
            for ($c = 0; $c <= 3; $c++)
            {
              if($r==0 && $c==0)//blank
              {
                echo '<th>' ."".'</th>';
              }
              else if($c==0)//The first title column
              {
                if($r==1)
                {
                  echo '<th>' ."Apple". '</th>';
                }
                else if($r==2)
                {
                  echo '<th>' ."Pen". '</th>';
                }
                else if($r==3)
                {
                  echo '<th>' ."Pineapple". '</th>';
                }
                
              }
              else if($r==0)//The first title row
              {
                  if($c==1)
                  {
                    echo '<th>' ."Quantity".'</th>';
                  }
                  else if($c==2)
                  {
                    echo '<th>' ."Cost Per Item".'</th>';
                  }
                  else if($c==3)
                  {
                    echo '<th>' ."Sub Total".'</th>';
                  }
              }
              else if($c==1)//Quantity column
              {
                if($r==1)
                {
                  echo '<td>' .$number1.'</td>';
                }
                else if($r==2)
                {
                  echo '<td>' .$number2.'</td>';
                }
                else if($r==3)
                {
                  echo '<td>' .$number3.'</td>';
                }
              }
              else if($c==2)//The Cost per Item column
              {
                if($r==1)
                {
                  echo '<td>' ."$2.00".'</td>';
                }
                else if($r==2)
                {
                  echo '<td>' ."$4.00".'</td>';
                }
                else if($r==3)
                {
                  echo '<td>' ."$6.00".'</td>';
                }
              }
              else if($c==3)//the sub total column
              {
                if($r==1)
                {
                  echo '<td>' ."$".$subtotal1.'</td>';
                }
                else if($r==2)
                {
                  echo '<td>' ."$".$subtotal2.'</td>';
                }
                else if($r==3)
                {
                  echo '<td>' ."$".$subtotal3.'</td>';
                }
                else if($r==4)
                {
                  echo '<td>' ."$".$shipping.'</td>';
                }
              }
              if($r==4)//the shipping row
              {
                  if($c==1)
                  {
                    if($shipping==0)
                    {
                        echo '<td colspan="2">' ."Free 7 day".'</td>';
                    }
                    else if($shipping==50)
                    {
                        echo '<td colspan="2">' ."Over night".'</td>';
                    }
                    else if($shipping==5)
                    {
                        echo '<td colspan="2">' ."Three day".'</td>';
                    }
                  }
                  else if($c==0)
                  {
                    echo '<th>' ."Shipping".'</th>';
                  }
              }
              else if($r==5)//the last total cost row
              {
                if($c==0)
                {
                    echo '<th colspan="3">' ."Total Cost".'</th>';
                }
                else if($c==1)
                {
                    echo '<td>' ."$".$totalcost.'</td>';
                }
              }
            }
           echo '</tr>'; // close tr tag here
        }
    echo"</table></center>";
?>