<?php
    function NumbersInStrings($str)
    {
        //chuyen tung ky tu sang mang
        $arr = str_split($str);
        $max = 0;
        for($i = 0; $i <count($arr); $i++) {
            $sum = 0;
            if(preg_match('/[0-9]/',$arr[$i])) {
               for($j = $i; $j < count($arr); $j++) {
                   if(preg_match('/[0-9]/',$arr[$j])) {
                       $sum = $sum*10 + $arr[$j];
                   } else {
                       break;
                   }
               } 
            }
            if($sum > $max) {
                $max = $sum;
            }
        }
        echo $max;
    }
    $str = "gh124cd54y695m35m7675af533af";
    NumbersInStrings($str);
?>