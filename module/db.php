<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=du_an_1;charset=utf8","root","");
} catch(\Throwable $th){
    echo "Lỗi kết nối";
}
?>