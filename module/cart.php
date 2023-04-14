<?php

function insert_bill($name, $address, $phone, $date)
{
    $sql = "INSERT INTO `placinganorder`(`name`,`address`,`phone`,`dateOder`) values ('$name', '$address','$phone', '$date')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($idUser, $idsp, $quantity, $tt, $idbill)
{
    $sql = "INSERT INTO `cart`(`idUser`,`idsp`,`quantity`,`tinhtrang`,`idOrder`) values
('$idUser','$idsp','$quantity','$tt','$idbill')";
    return pdo_execute($sql);
}
function order($id)
{
    $sql = "SELECT *,cart.quantity,product.quantity as slsp FROM cart
    inner join product on cart.idSp = product.idProduct 
    inner join `status` on cart.tinhtrang = `status`.idStatus
    where `idUser` = " . $id . " order by idCart desc";
    $listod = pdo_query($sql);
    return $listod;
}
function cart()
{
    $sql = "SELECT * FROM cart";
    $listod = pdo_query($sql);
    return $listod;
}
function customer()
{
    $sql = "SELECT *,cart.quantity,product.quantity as slsp FROM cart
    inner join user on user.idUser = cart.idUser
    inner join `status` on `status`.idStatus = cart.tinhtrang
    inner join product on cart.idSp = product.idProduct";
    $sql .= " ORDER BY `idCart`  desc";
    $listod = pdo_query($sql);
    return $listod;
}
function change_status($id, $change_status)
{
    $sql = "UPDATE `cart` set `tinhtrang`='" . $change_status . "' WHERE `idCart`=" . $id;
    pdo_execute($sql);
}

function bill($id)
{
    $sql = "SELECT * FROM `placinganorder` where idOder =" . $id;
    $listdm = pdo_query($sql);
    return $listdm;
}
function status()
{
    $sql = "SELECT * FROM `status`";
    $listst = pdo_query($sql);
    return $listst;
}
?>