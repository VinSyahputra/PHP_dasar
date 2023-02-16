<?php

$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$arr[] = explode(" ", $nilai);

function countAverage($arr)
{
    $hasil = array_sum($arr[0]) / count($arr[0]);
    return round($hasil);
}

function countMax($arr)
{
    return max($arr[0]);
}

function countMin($arr)
{
    return min($arr[0]);
}

echo "average : " . countAverage($arr);
echo "<br>";
echo "max : " . countMax($arr);
echo "<br>";
echo "min : " . countMin($arr);
