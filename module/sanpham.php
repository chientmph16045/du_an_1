<?php

function insert_sp($name, $price, $image, $description, $quantity, $idCategory)
{
    $sql = "INSERT INTO `product`(`name`,`price`,`image`,`description`,`quantity`,`idCate`) values ('$name','$price','$image','$description','$quantity','$idCategory') ";
    pdo_execute($sql);
}


function list_sp($kyw, $idCate)
{
    $sql = "SELECT * FROM `product` WHERE 1 ";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($idCate > 0) {
        $sql .= "  and idCate = '" . $idCate . "'";
    }
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_one_sp($id){
    $sql = "SELECT * FROM `product` WHERE idProduct = ".$_GET['id'];
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_one_list_sp_same($id)
{
    $sql = "SELECT * FROM `product` WHERE idCate = " . $id;
    $sp = pdo_query($sql);
    return $sp;
}
function update_sp($id, $name, $price, $image, $description, $quantity, $idCate)
{
    if ($image != '') {
        $sql = "UPDATE `product` set `name`='" . $name . "', `price`='" . $price . "',`image`='" . $image . "',`description`='" . $description . "',`quantity`='" . $quantity . "',`idCate`='" . $idCate . "' WHERE `product`.`idProduct`=" . $id;
    } else {
        $sql = "UPDATE `product` set `name`='" . $name . "', `price`='" . $price . "',`description`='" . $description . "',`quantity`='" . $quantity . "',`idCate`='" . $idCate . "' WHERE `product`.`idProduct`=" . $id;
    }
    pdo_execute($sql);
}
function delete_sp($id)
{
    $sql = "DELETE FROM `product` WHERE idProduct = " . $_GET['id'];
    pdo_execute($sql);
}

function loadTop10(){
    $sql ="SELECT * FROM `product` where 1 order by view desc limit 0,10";
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