<?php
require_once("./includes/utils.php");
require_once("./includes/cesar.php");
require_once("./includes/vigenere.php");

$action = $_POST["action"];

switch ($action) {
    case 'code_cesar':
        $output_cesar = code_cesar($_POST["input_cesar"], $_POST["cesar_key"]);
        break;
    case "decode_cesar":
        $output_cesar = decode_cesar($_POST["input_cesar"], $_POST["cesar_key"]);
        break;
    case "encode_vigenere":
        $output_vigenere = encode_vigenere($_POST["input_vigenere"], $_POST["vigenere_key"]);
        break;
    case "decode_vigenere":
        $output_vigenere = decode_vigenere($_POST["input_vigenere"], $_POST["vigenere_key"]);
        break;
}

require_once("views/index.phtml");
