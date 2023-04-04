<?php

function insert_sp($name, $price,$sale_price  ,$image, $description, $quantity, $view ,$size , $idCategory)
{
    $sql = "INSERT INTO `product`(`name`,`price`,`sale_price`,`image`,`description`,`quantity`,`view`,`size`,`idCate`) values ('$name','$price','$sale_price','$image','$description','$quantity','$view','$size','$idCategory') ";
    pdo_execute($sql);
}

function list_sp(){
    $sql = "SELECT * FROM `product`";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_one_sp($id){
    $sql = "SELECT * FROM `product` WHERE idProduct = ".$_GET['id'];
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_one_list_sp_same($sp){
    $sql = "SELECT * FROM `product` WHERE idCate = ".$sp;
    $sp = pdo_query($sql);
    return $sp;
}
function update_sp($id,$name, $price,$sale_price, $image, $description, $quantity,$view,$size, $idCate){
    if($image != ''){
    $sql = "UPDATE `product` set `name`='".$name."', `price`='".$price."', `sale_price`='".$sale_price."',`image`='".$image."',`description`='".$description."',`quantity`='".$quantity."',`view`='".$view."', `size`='".$size."',`idCate`='".$idCate."' WHERE `product`.`idProduct`=".$id;
    }else{
    $sql = "UPDATE `product` set `name`='".$name."', `price`='".$price."', `sale_price`='".$sale_price."',`description`='".$description."',`quantity`='".$quantity."',`view`='".$view."', `size`='".$size."',`idCate`='".$idCate."' WHERE `product`.`idProduct`=".$id;
    }
    pdo_execute($sql);
}
function delete_sp($id){
    $sql = "DELETE FROM `product` WHERE idProduct = " . $_GET['id'];
    pdo_execute($sql);
}

function loadTop10(){
    $sql ="SELECT * FROM `product` where 1 order by view desc limit 0,9";
    $listsanpham=pdo_query($sql);

    return $listsanpham;
}

function loadall_sp(){
    $sql="SELECT * FROM `product` where 1 order by idProduct desc limit 0,9";

    $listsanpham=pdo_query($sql);

    return $listsanpham;
}

function loadall_size(){
    $sql="SELECT * FROM `product` where 1 order by size desc limit 0,9";

    $listsanpham=pdo_query($sql);

    return $listsanpham;
}

// hàm tìm kiếm sản phẩm theo tên 

function search_sp($kw,$idcate){
        $sql="SELECT * FROM `product` where 1";

        if ($kw!="") {
            $sql=" and name like '%".$kw."$'";
        }

        if ($idcate>0) {
            $sql.=" and idcate='".$idcate."'";
        }

        $sql.=" order by idProduct desc";
        $listsanpham=pdo_query($sql);

        return $listsanpham;
}

// load sản phẩm sale mới nhất
function load_sale_sp(){
    $sql ="SELECT * FROM `product` where 1 order by sale_price desc limit 0,9";
    $listsanpham=pdo_query($sql);

    return $listsanpham;
}

function load_sale_sp3(){
    $sql ="SELECT * FROM `product` where 1 order by sale_price >0 desc limit 0,3";
    $listsanpham=pdo_query($sql);

    return $listsanpham;
}

function load_quantity_sp(){
    $sql ="SELECT * FROM `product` where 1 order by quantity desc limit 0,6";
    $listsanpham=pdo_query($sql);

    return $listsanpham;
}

?>

