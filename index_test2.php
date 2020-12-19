<?php

// Beginner Series #2 Clock

function past($h, $m, $s)
{
    $a = $h >= 0 || $h <= 23;
    $b = $m >= 0 || $m <= 59;
    $c = $s >= 0 || $s <= 59;

    if ($a && $b && $c) {
        $total = ($h * 3600000) + ($m * 60000) + ($s * 1000);
    }
    return $total;
}

echo past(0, 1, 1);
