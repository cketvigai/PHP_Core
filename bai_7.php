<?php
    function VowelCount($str)
    {
        //chuyen tung ky tu sang mang
        $arr = str_split($str);
        $dem = 0;
        for($i = 0 ; $i < count($arr); $i++) {
            if($arr[$i] == 'u' || $arr[$i] == 'e' || $arr[$i] == 'o' || $arr[$i] == 'a' || $arr[$i] == 'i') {
                $dem++;
            }
        }
        return $dem;
    }
    $str = "afejgjskgs";
    echo VowelCount($str);
?>