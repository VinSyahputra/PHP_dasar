<?php

$paragraf = "jakarta adalah ibukota negara republik indonesia";
function unigram($paragraf)
{
    $arr = explode(' ', $paragraf);
    $unigram = '';
    foreach ($arr as $a) {
        $unigram .= $a . ', ';
    }
    $unigram = substr($unigram, 0, -2);
    return $unigram;
}
function bigram($paragraf)
{
    $arr = explode(' ', $paragraf);
    $bigram = '';
    $isTrue = true;
    foreach ($arr as $a) {
        if ($isTrue) {
            $bigram .= $a . ' ';
            $isTrue = false;
        } else {
            $bigram .= $a . ', ';
            $isTrue = true;
        }
    }
    $bigram = substr($bigram, 0, -2);
    return $bigram;
}
function trigram($paragraf)
{
    $arr = explode(' ', $paragraf);
    $trigram = '';
    $index = 0;
    foreach ($arr as $a) {
        if ($index < 2) {
            $trigram .= $a . ' ';
            $index++;
        } else {
            $trigram .= $a . ', ';
            $index = 0;
        }
    }
    $trigram = substr($trigram, 0, -2);
    return $trigram;
}

echo 'Unigram : ' . unigram($paragraf);
echo "<br>";
echo 'Bigram : ' . bigram($paragraf);
echo "<br>";
echo 'Trigram : ' . trigram($paragraf);
