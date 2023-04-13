<?php

function insert_sp($name, $price, $image, $description, $quantity, $idCategory)
{
    $sql = "INSERT INTO `product`(`namePro`,`price`,`image`,`description`,`quantity`,`idCate`) values ('$name','$price','$image','$description','$quantity','$idCategory') ";
    pdo_execute($sql);
}


function list_sp($kyw, $idCate)
{
    $sql = "SELECT * FROM `product` WHERE 1 ";
    if ($kyw != "") {
        $sql .= " and namePro like '%" . $kyw . "%'";
    }
    if ($idCate > 0) {
        $sql .= "  and idCate = '" . $idCate . "'";
    }
    $orderField = isset($_GET['field']) ? $_GET['field'] : "";
    $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
    if (!empty($orderField) && !empty($orderSort)) {
        $sql .= " ORDER BY `product`.`" . $orderField . "`" . $orderSort;
    }
    $priceRange = $_POST['price_slider'];
    if (!empty($priceRange)) {
        $priceRangeArr = explode(',', $priceRange);
        $sql .= " and WHERE price BETWEEN '" . $priceRangeArr[0] . "' AND '" . $priceRangeArr[1] . "'";
        $sql .= " and ORDER BY price ASC ";
    }
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_one_sp($id)
{
    $sql = "SELECT * FROM `product` WHERE idProduct = " . $_GET['id'];
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
        $sql = "UPDATE `product` set `namePro`='" . $name . "', `price`='" . $price . "',`image`='" . $image . "',`description`='" . $description . "',`quantity`='" . $quantity . "',`idCate`='" . $idCate . "' WHERE `product`.`idProduct`=" . $id;
    } else {
        $sql = "UPDATE `product` set `namePro`='" . $name . "', `price`='" . $price . "',`description`='" . $description . "',`quantity`='" . $quantity . "',`idCate`='" . $idCate . "' WHERE `product`.`idProduct`=" . $id;
    }
    pdo_execute($sql);
}
function delete_sp($id)
{
    $sql = "DELETE FROM `product` WHERE idProduct = " . $_GET['id'];
    pdo_execute($sql);
}
function load_similar_product($id, $ma_loai)
{
    $sql = "select * from product where idCate='" . $ma_loai . "'and idProduct <> " . $id;
    $listsp = pdo_query($sql);
    return $listsp;
}
