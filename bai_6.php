<?php
    function MostPopularChar($str)
    {
        //chuyen tung ky tu sang dang mang
        $arr = str_split($str);
        $max = 0;
        for($i = 0; $i < count($arr) - 1; $i++) {
            $dem = 0;
            for($j = $i + 1; $j < count($arr); $j++) {
                if($arr[$j] == $arr[$i]) {
                    $dem++;
                }
            }
            if($dem > $max) {
                $max = $dem;
                $most = $i;
            } elseif($dem == $max) {
                $most = -1;
            }
        }
        if($most == -1) {
            return "No most popular char";
        } else {
            return $arr[$most];
        }
    }
    $str = "ababbabbbbgdahadb";
    echo "'" . MostPopularChar($str) . "'";

?>