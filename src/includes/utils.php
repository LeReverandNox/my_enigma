<?php

function isUpper($char)
{
    if ($char !== strtoupper($char))
        return false;
    return true;
}

function isLower($char)
{
    if ($char !== strtolower($char))
        return false;
    return true;
}

function isAlpha($char)
{
    $ascii_code = ord($char);
    if (($ascii_code >= 65 && $ascii_code <= 90) ||
        ($ascii_code >= 97 && $ascii_code <= 122))
        return true;
    return false;
}