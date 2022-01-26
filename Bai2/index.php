<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="number" placeholder="Nhap so luong phan tu cua mang">
    <button name="create">Tao mang</button>
</form>
</body>
</html>
<?php
include_once "Service.php";
$service = new Service();
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number = $_REQUEST["number"];
    $arr = $service->createArr($number);
}
if (isset($arr)){
    echo "Mảng đã tạo là : ";
    $service->inArr();
    echo "<br>";
    echo "Giá trị lớn nhất của mảng là : ".$service->getMax();
    echo "<br>";
    echo "Giá trị nhỏ nhất của mảng là : ".$service->getMin();
    echo "<br>";
    echo "Số dương chãn lớn nhất của mảng là : ".$service->getSoDuongChanMax();
    echo "<br>";
    echo "Số âm lẻ nhỏ nhất của mảng là : ".$service->getSoAmLeMin();
    echo "<br>";
    echo "Các số chính phương trong mảng là : ";
    if (empty($service->getSoChinhPhuong())){
        echo "Không có";
    }else{
        for ($i = 0; $i < count($service->getSoChinhPhuong()) ;$i++){
            echo $service->getSoChinhPhuong()[$i]." ";
        }
    }
    echo "<br>";
    echo "Tổng số các phần tử của mảng là : ".$service->sumArr();
    echo "<br>";
    echo "Trung bình cộng các phần tử trong mảng là : ".$service->tinhTB();
    echo "<br>";
    echo "Trung bình cộng các phần tử trong mảng là : ";
    for ($i = 0; $i < count($service->getPhanTuLonHonTBCong()) ;$i++){
        echo $service->getPhanTuLonHonTBCong()[$i]." ";
    }
    echo "<br>";
    echo "Sắp xếp tăng dần : ";
    for ($i = 0; $i < count($service->sort(false)) ;$i++){
        echo $service->sort(false)[$i]." ";
    }
    echo "<br>";
    echo "Sắp xếp giảm dần : ";
    for ($i = 0; $i < count($service->sort()) ;$i++){
        echo $service->sort()[$i]." ";
    }
}

