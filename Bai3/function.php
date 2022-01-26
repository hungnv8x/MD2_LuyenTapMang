<?php
function kiemTraSo($str){
    $pattern="/^[0-9]/";
    $str1="";
    for ($i = 0; $i < strlen($str);$i++){
        if (preg_match($pattern,$str[$i])){
            $str1 .=$str[$i];
        }
    }
    return $str1;
}
function kiemTraKyTuInHoa($str){
    $pattern = "/^[A-Z]/";
    $str1="";
    for ($i = 0; $i < strlen($str);$i++){
        if (preg_match($pattern,$str[$i])){
            $str1 .=$str[$i];
        }
    }
    return $str1;
}
function timSo($str,$x){
    for ($i = 0; $i <strlen($str) ;$i++){
        if ($str[$i] == $x){
            return true;
        }
    }
    return false;
}
