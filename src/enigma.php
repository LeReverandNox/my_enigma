<?php
require_once("./includes/utils.php");
require_once("./includes/cesar.php");

$action = $_POST["action"];

switch ($action) {
    case 'code_cesar':
        $output_cesar = code_cesar();
        break;
    case "decode_cesar":
        $output_cesar = decode_cesar();
        break;
}



require_once("views/index.phtml");