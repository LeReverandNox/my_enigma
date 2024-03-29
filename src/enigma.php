<?php
require_once("./includes/utils.php");
require_once("./includes/cesar.php");
require_once("./includes/vigenere.php");
require_once("./includes/vernam.php");

$action = $_POST["action"];

switch ($action) {
    case 'code_cesar':
        $output_cesar = endecode_cesar($_POST["input_cesar"], $_POST["cesar_key"], "encode");
        break;
    case "decode_cesar":
        $output_cesar = endecode_cesar($_POST["input_cesar"], $_POST["cesar_key"], "decode");
        break;
    case "encode_vigenere":
        $output_vigenere = endecode_vigenere($_POST["input_vigenere"], $_POST["vigenere_key"], "encode");
        break;
    case "decode_vigenere":
        $output_vigenere = endecode_vigenere($_POST["input_vigenere"], $_POST["vigenere_key"], "decode");
        break;
    case "encode_vernam":
        $output_vernam = endecode_vernam($_POST["input_vernam"], $_POST["vernam_key"], "encode");
        break;
    case "decode_vernam":
        $output_vernam = endecode_vernam($_POST["input_vernam"], $_POST["vernam_key"], "decode");
        break;
}

require_once("views/index.phtml");
