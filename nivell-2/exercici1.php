<?php

    function callPrice($minutes) {
        if ($minutes <= 3) {
            return 0.1;
        } else {
            return 0.1 + ($minutes - 3) * 0.05;
        }
    }

?>