<?php
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

function outputText($param)
{
    if ($param) {
        echo 'true <br>';
    } else {
        echo 'false <br>';
    }
}

outputText(cari($arr, 'fghi'));
outputText(cari($arr, 'fghp'));
outputText(cari($arr, 'fjrstp'));
outputText(cari($arr, 'fghq'));
outputText(cari($arr, 'fst'));
outputText(cari($arr, 'pqr'));
outputText(cari($arr, 'fghh'));
