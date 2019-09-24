<?php
    function Commas($number)
    {
        //lam tron so thap phan va tach lam 2 phan
        // if(!is_int($number)) {
            //     //$phan_thap_phan = substr($number, count($arr) - 4, count($arr));
            //     $phan_thap_phan = strstr($number, '.');
            //     $phan_nguyen =  substr($number, 0, strlen($number) - 4);
            // } else {
                //     $phan_nguyen = $number;
                // }
                // echo $phan_nguyen . " " .$phan_thap_phan;
        // $arr2 = [];
        // //chuyen tung ky tu sang mang
        // $arr = str_split($phan_nguyen);
        // if($arr[0] == "-") {
        //     $so_dau_phay = (int) ((count($arr) - 1 - 1) / 3);
        //     for($i = count($arr) - 1 ; $i > 0; $i = $i - 3) {
        //         array_push($arr2, $arr[$i], $arr[$i - 1], $arr[$i - 2]);
        //         if($so_dau_phay > 0){
        //             array_push($arr2,",");
        //             $so_dau_phay--;
        //         }
        //     }
        //     $number = implode("",$arr2);
        //     echo strrev($number) . $phan_thap_phan;
        // }
        $phan_thap_phan = (round(strstr($number, '.'),3));
        $phan_nguyen = strstr($number, '.', TRUE);
      
        echo number_format($phan_nguyen, 0, '.', ',') . strstr($phan_thap_phan, '.');
        
    }
    $number = -154334536.467324;
    Commas($number);
    ?>