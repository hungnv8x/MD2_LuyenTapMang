<?php
function createArr($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[] = rand(1, 100);
    }
    return $arr;
}

$arr = createArr(10);
echo "<pre>";
print_r($arr);
function sortArr($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $arr[$i];
        $index = $i;
        for ($j =$i+1 ; $j < count($arr); $j++) {
            if ($min > $arr[$j]) {
                $min = $arr[$j];
                $index = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $min;
        $arr[$index]=$temp;
    }
    return $arr;
}
$arr = sortArr($arr);
print_r($arr);
function loaiPhanTuTrung($arr){
    $arr1 =[];
    for ($i = 0; $i < count($arr) ;$i++){
        if (!in_array($arr[$i],$arr1)){
            $arr1[]=$arr[$i];
        }
    }
    return $arr1;
}
print_r(loaiPhanTuTrung($arr));
