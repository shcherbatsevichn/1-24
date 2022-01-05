<?php 
error_reporting(-1);
//Напечатать натуральное число N: 
//а) в двоичной системе счисления; 
//б) в шестнадцатеричной системе счисления.  
$n = 1498;

echo ($n.":<br>");
echo(get10($n)." - в десятиричной<br>");
echo(get16($n)." - в шестнадцатиричной <br>");



function get16($n){
    $value = $n;
    $res = "";
    $num = 0;
    $value = $n;
    while($value > 1){
        $num = $value % 16;
        $value = floor($value / 16);
        switch($num){
            case 10:
                $num = "A";
                break;
            case 11:
                $num = "B";
                break;
            case 12:
                $num = "C";
                break;
            case 13:
                $num = "D";
                break;
            case 14:
                $num = "E";
                break;
            case 15:
                $num = "F";
                break;
        }
        $res = strval($num).strval($res) ; 
    }
    return $res;
}

function get10($n){
    $value = $n;
    $res = 0;
    $num = 0;
    $len = 0;
    while($value > 1){
        $value = $value /2; 
        $len++;
    }
    $value = $n;
    $counter = 0;
    while($value > 1){      
        $num = $value % 2;
        $value = floor($value / 2);
        $res = $res + $num * pow(10, $counter) ;
        $counter++; 
    }
    $res = $res + 1 * pow(10, $len-1);
    return $res;
}




