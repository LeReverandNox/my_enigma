<?php
function endecode_cesar($input = "", $key = 1, $action = "")
{
    $input_length = strlen($input);
    $input_upper = strtoupper($input);
    $output_array = [];

    for ($i = 0; $i < $input_length; $i++) {
        $char = $input_upper[$i];
        if (!isAlpha($char)) {
            $output_array[$i] = $char;
            continue;
        }

        $ascii_code = ord($char);
        switch($action) {
            case "encode":
                $endecode_char = ($ascii_code + $key > 90) ? chr(($ascii_code + $key) - 26): chr(($ascii_code + $key));
                break;
            case "decode":
                $endecode_char = ($ascii_code - $key < 65) ? chr(($ascii_code - $key) + 26): chr(($ascii_code - $key));
                break;
        }

        $output_array[$i] = isUpper($input[$i]) ? strtoupper($endecode_char) : strtolower($endecode_char);
    }

    $output = implode($output_array);
    return $output;
}
