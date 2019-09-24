<?php
    function ReverseVowels($str)
    {
        $arr_vowels = ['u', 'e', 'o', 'a', 'i', 'U', 'E', 'O', 'A', 'I'];
        $arr = str_split($str);
        for($i = 0; $i < count($arr); $i++) {
            for($j = 0; $j < count($arr_vowels); $j++) {
                if($arr[$i] == $arr_vowels[$j]) {
                    $arr[$i] = $arr_vowels[array_rand($arr_vowels)];
                }
            }
        }
        echo implode("", $arr);
    }
    $str = 'RivArsI Vewols en e Streng';
    ReverseVowels($str);
?>