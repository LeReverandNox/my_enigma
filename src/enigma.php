<?php
require_once("./includes/utils.php");
require_once("./includes/cesar.php");
require_once("./includes/vigenere.php");

$action = $_POST["action"];

switch ($action) {
    case 'code_cesar':
        $output_cesar = code_cesar();
        break;
    case "decode_cesar":
        $output_cesar = decode_cesar();
        break;
    case "endecode_vigenere":
        $output_vigenere = endecode_vigenere();
}



require_once("views/index.phtml");