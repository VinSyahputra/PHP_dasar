<?php

$word = "TranSISI";

function countLowerLetter($word)
{
    return mb_strlen(preg_replace('![^a-z]+!', '', $word));
}

// echo 'jumlah huruf kecil pada kata ' .$word. ''. countLowerLetter($word);
echo "jumlah huruf kecil pada kata {$word} berjumlah : " . countLowerLetter($word);
