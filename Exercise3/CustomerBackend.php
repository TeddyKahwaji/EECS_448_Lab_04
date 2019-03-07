<?php

    if(isset($_POST['submit'])) {


    $background_color ="Blue";
    if (isset($_POST['submit'])){
    if(isset($_POST['free']))
    {
      $shippingSelection = $_POST['free'];
      //  Displaying Selected Value
    }
    }

    $shirtSelect = $_POST['Shirts'];

    $pantSelect = $_POST['Pants'];
    $jerseySelect = $_POST['Jerseys'];
     $shirt_amt = $_POST['FirstName'];
    $pant_amt = $_POST['FirstName2'];
    $jersey_amt = $_POST['FirstName3'];

    $item1_subTotal = $shirtSelect* $shirt_amt;
    $item2_subTotal = $pantSelect * $pant_amt;
    $item3_subTotal = $jerseySelect * $jersey_amt;

    if($shippingSelection=="7Day")
    {
      $shippingCost = 7.00;
    }
    if($shippingSelection=="OverNight")
    {
      $shippingCost = 50.00;
    }
    if($shippingSelection=="three")
    {
      $shippingCost = 3.00;
    }
    $totalCost = $item1_subTotal + $item2_subTotal + $item3_subTotal + $shippingCost;
    $item1 = "Item 1";
    $item2 = "Item 2";
    $item3 = "Item 3";
    $blank = "";
    $quant = "Quantity";
    $costString = "Cost Per Item";
    $subString = "Sub Total";
    $ship = "Shipping";
    $totalStr = "Total Cost";
    echo "<table border=\"1\">";
    echo "<body>";
            for ($r =0; $r < 5; $r++){

                echo'<tr>';

                for ($c = 0; $c < 5; $c++)
                {
                  if ($r==0 && $c ==0)
                  {
                      echo '<td>' .$blank. '</td>';
                  }
                  if ($r==1 && $c ==0)
                  {
                      echo '<td>' .$item1. '</td>';
                  }
                  if ($r==2 && $c ==0)
                  {
                      echo '<td>' .$item2. '</td>';
                  }
                  if ($r==3 && $c ==0)
                  {
                      echo '<td>' .$item3. '</td>';
                  }
                  if ($r==4 && $c ==0)
                  {
                      echo '<td>' .$ship. '</td>';
                  }
                  if ($r==5 && $c ==0)
                  {
                      echo '<td>' .$totalStr. '</td>';
                  }

                  if($r ==0 && $c==1)
                  {
                      echo '<td>' .$quant. '</td>';
                  }
                  if($r ==0 && $c==2)
                  {
                      echo '<td>' .$costString. '</td>';
                  }
                  if($r ==0 && $c==3)
                  {
                      echo '<td>' .$subString. '</td>';
                  }

                  if($r==1 && $c==1)
                  {
                    echo '<td>' .$shirt_amt. '</td>';
                  }
                  if($r==2 && $c==1)
                  {
                    echo '<td>' .$pant_amt. '</td>';
                  }
                  if($r==3 && $c==1)
                  {
                    echo '<td>' .$jersey_amt. '</td>';
                  }
                  if($r==4 && $c==1)
                  {
                    echo '<td>' .$shippingSelection. '</td>';
                  }

                  if($r==1 && $c==2)
                  {
                    echo '<td>' .$shirtSelect. '</td>';
                  }
                  if($r==1 && $c==3)
                  {
                    echo '<td>' .$item1_subTotal. '</td>';
                  }
                  if($r==2 && $c==2)
                  {
                    echo '<td>' .$pantSelect. '</td>';
                  }
                  if($r==2 && $c==3)
                  {
                    echo '<td>' .$item2_subTotal. '</td>';
                  }

                  if($r==3 && $c==2)
                  {
                    echo '<td>' .$jerseySelect. '</td>';
                  }
                  if($r==3 && $c==3)
                  {
                    echo '<td>' .$item3_subTotal. '</td>';
                  }
                  if($r==4 && $c==2)
                  {
                    echo '<td>' .$blank. '</td>';
                  }
                  if($r==4 && $c==4)
                  {
                    echo '<td>' .$shippingCost. '</td>';
                  }

                }
               echo '</tr>'; // close tr tag here

            }

          echo"</table>";
          echo "Total Cost: $";
          echo $totalCost;
          echo "</body>";

}
?>
