<?php
/**
* reverse string
* @param string
* @return string reversed string
*/
function FirstReverse($str) {
    return strrev($str);
}

/**
* shift letter by 1 from ASCII table, and change vowels to uppercase.
* @param  string        $str
* @return string formatted string
*/
function LetterChanges($str) {
    $out = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if (ctype_alpha($str[$i])) {
            $temp = chr(ord($str[$i]) + 1);
            $temp = ($temp == "a" || $temp == "e" || $temp == "i" || $temp == "o" || $temp == "u") ? strtoupper($temp) : $temp;
            $out .= $temp;
        } else {
            $out .= $str[$i];
        }
    }

    return $out;
}

/**
* compute first factorial
* @param  int         $num
* @return int         multiple of the numbers
*/
function FirstFactorial($num) {
    if ($num == 1) {
        return $num;
    }
    return $num * FirstFactorial($num - 1);
}

/**
* Simple Adding
* @param  int       $num add to
* @return int       sum of the numbers
*/
function SimpleAdding($num) {
    if($num == 1) {
        return $num;
    }
    return $num + SimpleAdding($num - 1);
}

/**
* Test longest word
*/
function LongestWord($sen) {
    // code goes here
    $longest = "";
    $arr = explode(' ', $sen);
    foreach($arr as $tempWord) {
        $temp = preg_replace("/[^A-Za-z]/", '', $tempWord);
        if(strlen($temp) > strlen($longest)) {
            $longest = $temp;
        }
    }
    return $longest;
}
