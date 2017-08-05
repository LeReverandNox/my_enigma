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
    return ctype_alpha($char);
}