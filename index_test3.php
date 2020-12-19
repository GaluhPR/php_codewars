<?php

function periodIsLate($last, $today, $cycleLength)
{
    if ($today->format('z') - $last->format('z') > $cycleLength) {
        return true;
    } else {
        return false;
    }
}

echo periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28);
