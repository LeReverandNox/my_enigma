<?php

function encode_vigenere($input = "", $key = "")
{
    $output_array = [];
    $input_length = strlen($input);
    $key_length = strlen($key);

    $key_upper = strtoupper($key);
    $input_upper = strtoupper($input);

    if ($key && !isAlpha($key)) {
        return "Please provide a alphabetical key only !";
    }

    $ignored = 0;
    for ($i = 0; $i < $input_length; $i++) {
        $char = $input_upper[$i];
        $char_key = $key_upper[($i - $ignored) % $key_length];

        if (!isAlpha($char)) {
            $ignored++;
            $output_array[$i] = $char;
            continue;
        }

        $char_code = ord($char) - 65;
        $cipher_code = ord($char_key) - 65;
        $shift = (($char_code + $cipher_code) > 26) ? (($char_code + $cipher_code) - 26) : ($char_code + $cipher_code);
        $deciphered_char = chr(65 + ($shift) % 26);

        $output_array[$i] = isUpper($input[$i]) ? strtoupper($deciphered_char) : strtolower($deciphered_char);
    }

    $output = implode($output_array);
    return $output;
}

function decode_vigenere($input = "", $key = "")
{
    $output_array = [];
    $input_length = strlen($input);
    $key_length = strlen($key);

    $key_upper = strtoupper($key);
    $input_upper = strtoupper($input);

    if ($key && !isAlpha($key)) {
        return "Please provide a alphabetical key only !";
    }

    $ignored = 0;
    for ($i = 0; $i < $input_length; $i++) {
        $char = $input_upper[$i];
        $char_key = $key_upper[($i - $ignored) % $key_length];

        if (!isAlpha($char)) {
            $ignored++;
            $output_array[$i] = $char;
            continue;
        }

        $char_code = ord($char) - 65;
        $cipher_code = ord($char_key) - 65;
        $shift = (($char_code - $cipher_code) < 0) ? (($char_code - $cipher_code) + 26) : ($char_code - $cipher_code);
        $deciphered_char = chr(65 + ($shift) % 26);

        $output_array[$i] = isUpper($input[$i]) ? strtoupper($deciphered_char) : strtolower($deciphered_char);
    }

    $output = implode($output_array);
    return $output;
}