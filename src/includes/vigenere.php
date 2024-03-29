<?php

function endecode_vigenere($input = "", $key = "", $action = "")
{
    $output_array = [];
    $input_length = strlen($input);
    $key_length = strlen($key);

    $key_upper = strtoupper($key);
    $input_upper = strtoupper($input);

    if (!$key)
        return "Please provide a key !";
    if (!isAlpha($key))
        return "Please provide a alphabetical key only !";

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

        switch ($action) {
            case "encode":
                $shift = (($char_code + $cipher_code) > 26) ? (($char_code + $cipher_code) - 26) : ($char_code + $cipher_code);
                break;
            case "decode":
                $shift = (($char_code - $cipher_code) < 0) ? (($char_code - $cipher_code) + 26) : ($char_code - $cipher_code);
                break;
        }

        $endecode_char = chr(65 + ($shift) % 26);

        $output_array[$i] = isUpper($input[$i]) ? strtoupper($endecode_char) : strtolower($endecode_char);
    }

    $output = implode($output_array);
    return $output;
}
