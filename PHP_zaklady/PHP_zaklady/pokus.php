<?php
function toUrlStr(string $str): string
{
    $urlStr = strtolower($str);
    return $urlStr;
}

echo toUrlStr("Jan Leti Nad Metro");
echo "\n";
echo toUrlStr(" SčA X");