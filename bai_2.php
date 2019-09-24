<?php
    function LetterChanges($str)
    {
        $arr = str_split($str); //chuyen tung ky tu sang dang mang
        for($i = 0; $i < count($arr); $i ++) {
            $so_nguyen = ord($arr[$i]);
            if($so_nguyen > 96 && $so_nguyen < 121) {
                $str = chr(++$so_nguyen);
                if($str == 'u' || $str == 'e' || $str == 'o' || $str == 'a' || $str == 'i') {
                    echo strtoupper($str);
                } else {
                    echo $str;
                }
                
            } elseif($so_nguyen == 122) {
                echo strtoupper(chr(97));
                
            } else {
                echo chr($so_nguyen);
            }
        }
    }
    $str = "fun times! z";
    LetterChanges($str);
?>