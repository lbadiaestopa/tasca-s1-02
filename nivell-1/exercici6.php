<?php

    function isBitten() {
        $randomBoolean = (bool) rand(0, 1);
        if ($randomBoolean == true) {
            return "Charlie has bitten you!";
        } else {
            return "Charlie has not bitten you.";
        }
    }

?>