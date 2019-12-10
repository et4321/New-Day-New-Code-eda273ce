<?php

$stonks = intval($argv[1]);
define("GELD" , array(50, 20, 10, 5, 2, 1));


 foreach (GELD as $bedrag) {
    if ($stonks >= $bedrag) {
        $floored = floor ($stonks / $bedrag);
        echo "$floored * $bedrag euro".PHP_EOL;
        $stonks = $stonks - ($floored *  $bedrag);
    }
 }


?>   