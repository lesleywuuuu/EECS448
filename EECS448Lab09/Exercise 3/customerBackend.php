<?php 

    echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

    $user_name = $_POST["Username"];
    $pass_word = $_POST["Password"];
    $shipping = $_POST["shipping"];

    $numEgg = $_POST["eggNum"];
    $numJuice = $_POST["juiceNum"];
    $numBeef = $_POST["beefNum"];

    $priceEgg = 1;
    $priceJuice = 2;
    $priceBeef = 5;


    if($shipping == "Free 7 Day")
    {
        $priceShipping = 0;
    }
    else if($shipping == "Overnight")
    {
        $priceShipping = 50;
    }
    else if($shipping == "3 Day")
    {
        $priceShipping = 5;
    }

    $priceTotal = ($numEgg * $priceEgg)
                + ($numJuice * $priceJuice)
                + ($numBeef * $priceBeef)
                + $priceShipping;

    $goodsName = array("Egg ($1/ea)", "Juice ($2/lbs)", "Beef ($5/lbs)");
    $receiptlist = array("Quantity", "Cost Per Item", "Sub total");


    echo "Welcome " . $user_name . "! Your password is " . $pass_word . ".<br>";
    echo "You selected " . $shipping . " shipping<br><br>";
    echo "Here is your receipt: <br>";
    echo "<table style='border: solid black' border = 1px width = 80% height = 80% position = relative>";

    for ($row = 0; $row <4; $row++)
    {
        echo "<tr>";
        for ($col = 0; $col <4; $col++)
        {
            if ($row == 0 && $col > 0)
            {
                echo "<td style='text-align: center'><b>" . $receiptlist[$col-1] . "</b></td>";
            }
            else if ($col == 0 && $row > 0)
            {
                echo "<td><b>" . $goodsName[$row-1] . "</b></td>";
            }
            else if ($row == 0 && $col == 0)
            {
                echo "<td> </td>";
            }

            else
            {
                if ($row == 1)
                {
                    if ($col == 1)
                    {
                        echo "<td style='text-align: center'>" . $numEgg . "</td>";
                    }
                    else if ($col == 2)
                    {
                        echo "<td style='text-align: center'>$1.00</td>";
                    }
                    else
                    {
                        echo "<td style='text-align: center'>$" . $numEgg  * $priceEgg . ".00</td>";
                    }
                }
                
                else if ($row == 2)
                {
                    if ($col == 1)
                    {
                        echo "<td style='text-align: center'>" . $numJuice . "</td>";
                    }
                    else if ($col == 2)
                    {
                        echo "<td style='text-align: center'>$2.00</td>";
                    }
                    else
                    {
                        echo "<td style='text-align: center'>$" . $numJuice * $priceJuice . ".00</td>";
                    }
                }

                else
                {
                    if ($col == 1)
                    {
                        echo "<td style='text-align: center'>" . $numBeef . "</td>";
                    }
                    else if ($col == 2)
                    {
                        echo "<td style='text-align: center'>$5.00</td>";
                    }
                    else
                    {
                        echo "<td style='text-align: center'>$" . $numBeef * $priceBeef. ".00</td>";
                    }
                }
            }
        }
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td><b>Shipping</b></td>";
    echo "<td colspan = '2' style='text-align: center'>" . $shipping . "</b></td>";
    echo "<td style='text-align: center'>$" . $priceShipping . ".00</td>";

    echo "</tr>";
    echo "<tr>";
    echo "<td colspan = '3' style='text-align: center'><b>Total Cost</b></td>";
    echo "<td style='text-align: center'>$" . $priceTotal . ".00</td>";
    echo "</tr>";
    echo "</table>";
?>