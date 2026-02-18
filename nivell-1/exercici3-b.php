<?php

    function calculator($num1, $num2, $operator) {
        if ($operator != '+' && $operator != '-' && $operator != '*' && $operator != '/') {
            return "Error: Invalid operator";
        }

        if ($operator == '/' && $num2 == 0) {
            return "Error: Division by zero";
        }

        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                return $num1 / $num2;
        }
    }

    echo calculator(5, 3, "+") . "\n";
    echo calculator(5, 3, "-") . "\n";
    echo calculator(5, 3, "*") . "\n";
    echo calculator(5, 3, "/") . "\n";
    echo calculator(5, 0, "/") . "\n";
    echo calculator(5, 3, "%") . "\n";

?>  