<?php

    function numbersBetween($sum, $num1 = 10) {
        if ($num1 <= 0) {
            return "Error: num1 should be greater than 0";
        }

        for ($i =  0; $i <= $num1; $i += $sum) {
            echo $i . " ";
        }
    }

?>