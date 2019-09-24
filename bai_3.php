<?php
    function createPhoneNumber($arr)
    {
        $kt = 0;
        for($i = 0; $i <count($arr); $i++) {
            if(preg_match('/[0-9]/',$arr[$i]) == 0) {
                $kt = 1;
            }
        } 
        if($kt == 1) {
            echo "Mang truyen vao la cac so tu 0-9";
        } elseif(count($arr) != 10) {
                echo "So nhap vao la sdt gom 10 chu so";
        } else {
            $arr = implode("", $arr);
            return "(" . substr($arr, 0, 3) . ") " . substr($arr, 3,3) . "-" . substr($arr, 6, 4);
        }
        
    }
    $arr=[1,2,3,4,5,6,7,8,9,0];
    echo createPhoneNumber($arr);
?>