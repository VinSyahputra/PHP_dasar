<?php
function enkripsi($input)
{
    // Konversi input string menjadi array karakter
    $input_arr = str_split($input);

    // Buat array kosong untuk menyimpan hasil enkripsi
    $output_arr = array();

    $i = 1;
    // Loop setiap karakter pada input array
    foreach ($input_arr as $char) {
        // Konversi karakter menjadi kode ASCII
        $ascii_code = ord($char);

        // Shift ASCII code karakter ke kiri/kanan 
        if ($i % 2 == 0) {
            $new_ascii_code = $ascii_code - $i;
        } else {
            $new_ascii_code = $ascii_code + $i;
        }

        // Konversi kembali kode ASCII menjadi karakter
        $new_char = chr($new_ascii_code);

        // Tambahkan karakter baru ke output array
        array_push($output_arr, $new_char);
        $i++;
    }

    // Gabungkan semua karakter pada output array menjadi string
    $output_str = implode('', $output_arr);

    // Kembalikan output string
    return $output_str;
}

echo 'hasil enkripsi : ' . enkripsi('DFHKNQ');
