<?php
function code_cesar($input = "", $key = 1)
{
    $input_length = strlen($input);
    $output_array = [];

    for ($i = 0; $i < $input_length; $i++) {
        $char = $input[$i];
        if (!isAlpha($char)) {
            $output_array[$i] = $char;
            continue;
        }

        $ascii_code = ord($char);
        if (isUpper($char)) {
            $output_array[$i] = ($ascii_code + $key > 90) ? chr(($ascii_code + $key) - 26): chr(($ascii_code + $key));
        } elseif (isLower($char)) {
            $output_array[$i] = ($ascii_code + $key > 122) ? chr(($ascii_code + $key) - 26): chr(($ascii_code + $key));
        }
    }

    $output = implode($output_array);
    return $output;
}

function decode_cesar($input = "", $key = 1)
{
    $input_length = strlen($input);
    $output_array = [];

    for ($i = 0; $i < $input_length; $i++) {
        $char = $input[$i];
        if (!isAlpha($char)) {
            $output_array[$i] = $char;
            continue;
        }

        $ascii_code = ord($char);
        if (isUpper($char)) {
            $output_array[$i] = ($ascii_code - $key < 65) ? chr(($ascii_code - $key) + 26): chr(($ascii_code - $key));
        } elseif (isLower($char)) {
            $output_array[$i] = ($ascii_code - $key < 97) ? chr(($ascii_code - $key) + 26): chr(($ascii_code - $key));
        }
    }

    $output = implode($output_array);
    return $output;
}