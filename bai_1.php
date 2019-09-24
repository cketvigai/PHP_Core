<?php

    function LongestWord($sen)
    {
        $arr = str_split($sen); //chuyen tung ky tu sang dang mang
        $arr2 = array();
        //loai bo cac ky tu dau cau
        for($i = 0; $i < count($arr); $i ++) {
            $check = preg_match('/[a-zA-Z0-9 ]/',$arr[$i]);
            if($check) {
                $arr2[] = $arr[$i];
            }
        }

        $arr = implode("",$arr2); //chuyen mang ve dang chuoi
        $arr2 = explode(" ",$arr); //chuyen cac tu sang mang

        $max = 0;
        $tmp = 0;
        for($i = 0; $i < count($arr2); $i ++) {
            $kt = strlen($arr2[$i]);
            if($kt > $max) {
                $max = $kt;
                $tmp = $i;
            }
        }
        echo $arr2[$tmp];
        
    }

    $str = "Cao. ?H#ai ^Dang A)DAG_ faf)FA FA+WGR";
    LongestWord($str);
      
?>