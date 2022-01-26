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
<form action="" method="post">
    <input type="text" name="str" placeholder="Nhập chuôi vào đây">
    <button>Kiểm tra</button>
</form>
<br>
</body>
</html>
<?php
include_once "function.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $str = $_REQUEST["str"];
    echo "Chuỗi đã nhập là : ".$str;
    echo "<br>";
    if (empty(kiemTraSo($str))){
        echo "Không có ký tự số nào trong chuỗi";
    }else{
        echo "Các ký tự số trong chuỗi là : ".kiemTraSo($str);
    }
    echo "<br>";
    if (empty(kiemTraKyTuInHoa($str))){
        echo "Không có ký tự nào in hoa trong chuỗi";
    }else{
        echo "Các ký tự in hoa trong chuỗi là : ".kiemTraKyTuInHoa($str);
    }
}
?>