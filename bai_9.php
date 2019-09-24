<?php
    function ArrayExchange($arr)
    {
        echo "Array_in  ";
        foreach($arr as $val) {
            echo $val . " ";
        }
        $str = implode('', $arr);
        $str = strrev($str);
        $arr_out = str_split($str);
        echo "<br>Array_out ";
        foreach($arr_out as $val) {
            echo $val . " ";
        }
    }
    $arr = ['a','b','c','d'];
    ArrayExchange($arr);
?>