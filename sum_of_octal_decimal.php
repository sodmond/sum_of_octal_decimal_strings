<?php
/*
Given an array of octal decimal strings, return their sum (also an octal decimal string).

Example:

solution([1324,2422,1422]) => 5370
*/
function solution($arr) {
    // Write your code here: for testing inputs are processed from the standard input box(es)
    $total = 0;
    foreach ($arr as $a){
      $total += octdec($a);
    }
    return decoct($total);
}