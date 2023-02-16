<?php
// $arr = [
//     ['f', 'g', 'h', '1'],
//     ['j', 'k', 'p', 'q'],
//     ['r', 's', 't', 'u'],
// ];

// // var_dump($arr[0]);
// // echo "<br>";
// // var_dump($arr[1]);

// function cari($arr, $word)
// {
//     $letter = str_split($word);
//     for ($i = 0; $i < count($arr); $i++) {
//         for ($j = 0; $j < count($arr[$i]); $j++) {
//             if ($letter[$j] == $arr[$i][$j]) {
//                 echo $arr[$i][$j] . "<br>";
//             }
//         }
//         echo "<br> <br>";
//     }
// }

// cari($arr, 'fghi');


$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

function cari(array $arr, string $kata)
{
    $current_position = [];
    $kata_split = str_split($kata);

    foreach ($kata_split as $ks) {
        foreach ($arr as $outer => $value) {
            $inner = array_search($ks, array_column($value, null));
            if ($inner !== false) {
                if (!is_sibling($current_position, [$outer, $inner])) {
                    return false;
                }
                $current_position = [$outer, $inner];
            }
        }
    }
    return true;
}

function is_sibling(array $current, array $next)
{
    if (empty($current)) {
        return true;
    }

    // to right
    if ([$current[0], $current[1] + 1] == $next) {
        return true;
    }
    // to left
    if ([$current[0], $current[1] - 1] == $next) {
        return true;
    }
    // to top
    if ([$current[0] - 1, $current[1]] == $next) {
        return true;
    }
    // to bottom
    if ([$current[0] + 1, $current[1]] == $next) {
        return true;
    }
    return false;
}

$res[0] = cari($arr, 'fghi');
$res[1] = cari($arr, 'fghp');
$res[2] = cari($arr, 'fjrstp');
$res[3] = cari($arr, 'fghq');
$res[4] = cari($arr, 'fst');
$res[5] = cari($arr, 'pqr');
$res[6] = cari($arr, 'fghh');

var_dump($res);
