<?php

error_reporting(0);

$laps = 10;
$runsPerLap = 1000000;

$timesFirst = 0;
$timesSecond = 0;
for ($i = 0; $i < $laps; $i++) {
    print("\nLap $i / $laps\n");
    $start = microtime(true);
    for ($j = 0; $j < $runsPerLap; $j++) {
        firstFunction();
    }
    $end = microtime(true);
    $timeFirst = $end - $start;
    $timesFirst += $timeFirst;

    $start = microtime(true);
    for ($j = 0; $j < $runsPerLap; $j++) {
        secondFunction();
    }
    $end = microtime(true);
    $timeSecond = $end - $start;
    $timesSecond += $timeSecond;

    print('first: ' . $timeFirst . "\n");
    print('second: ' . $timeSecond . "\n");
}

$averageTimeFirst = $timesFirst / $laps;
$averageTimeSecond = $timesSecond / $laps;
print ('avg_first: ' . $averageTimeFirst . "\n");
print ('avg_second: ' . $averageTimeSecond . "\n");

function firstFunction()
{
    $foo = false;

    if ($foo) {
        return true;
    } else if (!$foo) {
        return false;
    }
}

function secondFunction()
{
    $foo = false;

    if ($foo) {
        return true;
    }

    if (!$foo) {
        return false;
    }
}

