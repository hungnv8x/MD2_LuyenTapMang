<?php

class Service
{
    public $arr;

    public function createArr($number)
    {
        for ($i = 0; $i < $number; $i++) {
            $this->arr[] = rand(-100, 100);
        }
        return $this->arr;
    }

    public function inArr()
    {
        echo "[";
        for ($i = 0; $i < count($this->arr); $i++) {
            echo $this->arr[$i] . " ";
        }
        echo "]";
    }

    public function getMax()
    {
        $max = $this->arr[0];
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($max < $this->arr[$i]) {
                $max = $this->arr[$i];
            }
        }
        return $max;
    }

    public function getMin()
    {
        $min = $this->arr[0];
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($min > $this->arr[$i]) {
                $min = $this->arr[$i];
            }
        }
        return $min;
    }

    public function getSoDuongChanMax()
    {
        $arrDuongChan = [];
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($this->arr[$i] > 0 && $this->arr[$i] % 2 == 0) {
                $arrDuongChan[] = $this->arr[$i];
            }
        }
        $max = $arrDuongChan[0];
        for ($i = 0; $i < count($arrDuongChan); $i++) {
            if ($max < $arrDuongChan[$i]) {
                $max = $arrDuongChan[$i];
            }
        }
        return $max;
    }

    public function getSoAmLeMin()
    {
        $arrAmLe = [];
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($this->arr[$i] < 0 && $this->arr[$i] % 2 != 0) {
                $arrAmLe[] = $this->arr[$i];
            }
        }
        $min = $arrAmLe[0];
        for ($i = 0; $i < count($arrAmLe); $i++) {
            if ($min > $arrAmLe[$i]) {
                $min = $arrAmLe[$i];
            }
        }
        return $min;
    }

    public function sumArr()
    {
        $sum =0;
        for ($i = 0; $i < count($this->arr) ;$i++){
            $sum += $this->arr[$i];
        }
        return $sum;
    }

    public function getSoChinhPhuong()
    {
        $arrCP=[];
        for ($i = 0; $i < count($this->arr) ;$i++){
            $a = round(pow($this->arr[$i],0.5),2);
            if ($this->arr[$i] == pow($a,2)){
                $arrCP[]=$this->arr[$i];
            }
        }
        return $arrCP;
    }

    public function tinhTB()
    {
        return $this->sumArr()/count($this->arr);
    }

    public function getPhanTuLonHonTBCong()
    {
        $arr1=[];
        for ($i = 0; $i <count($this->arr) ;$i++){
            if ($this->arr[$i] > $this->tinhTB()){
                $arr1[]=$this->arr[$i];
            }
        }
        return $arr1;
    }

    public function sort($des=true)
    {
        for ($i = 0; $i < count($this->arr) ;$i++){
            $value = $this->arr[$i];
            $index = $i;
            for ($j = $i + 1; $j <count($this->arr) ;$j++){
                $bt = $des?$value < $this->arr[$j] : $value > $this->arr[$j];
                if ($bt){
                    $value = $this->arr[$j];
                    $index = $j;
                }
            }
            $temp = $this->arr[$i];
            $this->arr[$i] = $value;
            $this->arr[$index] = $temp;
        }
        return $this->arr;
    }

}