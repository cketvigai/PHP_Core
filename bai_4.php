<?php
    function BackspaceInString($str)
    {
        //chuyen tung ki tu sang mang
        $arr = str_split($str);
        $arr2 = [];
        if(empty($arr)){
            echo "";
        } elseif(!in_array('#', $arr)) {
            echo '"' . implode("",$arr) . '"';
        } else
        for($i = 0; $i < count($arr); $i++) {
            if($arr[$i] != '#') {
                array_push($arr2, $arr[$i]);
            } else {
                //array_pop tra ve gia tri pop, mang se xoa di phan tu cuoi
                array_pop($arr2);
            }
        }
        //chuyen mang ve chhuoi 
        $str = implode("",$arr2);
        echo '"' . $str . '"';
    }   
    $str = "abc#d##c";
    BackspaceInString($str);
?>