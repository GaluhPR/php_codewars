<?php

function expressionMatter($a, $b, $c)
{
    $total = [];
    $total[] = abs($a) * abs($b) + abs($c);
    $total[] = abs($a) * (abs($b) + abs($c));
    $total[] = (abs($a) * abs($b)) + abs($c);
    $total[] = abs($a) + abs($b) * abs($c);
    $total[] = abs($a) + (abs($b) * abs($c));
    $total[] = (abs($a) + abs($b)) * abs($c);
    $total[] = abs($a) + abs($b) + abs($c);
    $total[] = abs($a) * abs($b) * abs($c);

    $hasil = 0;
    for ($i = 0; $i <= 7; $i++) {
        if ($hasil <= $total[$i]) {
            $hasil = $total[$i];
        }
    }

    return $hasil;
}

echo expressionMatter(3, 5, 7);
