<?php
/**
 * Created by PhpStorm.
 * User: 1513911
 * Date: 24/02/2016
 * Time: 14:43
 */
?>
<!DOCTYPE html>
    <html>
    <head>
    </head>
        <body>
             <p>
                <?php
                 echo "Hello World";
                $myage = 28;
                if ($myage >= 21){
                    echo "You can buy specs, mugs, and sausage rolls";
                }
                elseif($myage >=18){
                    echo"You can buy specs and mugs";
                }
                elseif($myage>=16){
                    echo"You can buy specs";
                }
                else{
                    echo"You can't buy anything";
                }
                ?>
             </p>
         </body>

    </html>

