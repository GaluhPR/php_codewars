<?php

function calculator($a, $b, $sign)
{
    if (!is_string($a) && !is_string($b)) {
        switch ($sign) {
            case "+":
                return $a + $b;
            case "-":
                return $a - $b;
            case "*":
                return $a * $b;
            case "/":
                return $a / $b;
            default:
                return 'unknown value';
        }
    } else {
        return 'unknown value';
    }
}

echo calculator(6, "2", "+");
