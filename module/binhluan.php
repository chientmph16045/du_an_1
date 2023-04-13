<?php 
function insert_comment($content, $dateComment,$idpro,$idUser,$nameUser)
{
    $sql = "INSERT INTO comment (content, dateComment, idProduct, idUser, nameUser) VALUES ('$content', '$dateComment','$idpro','$idUser','$nameUser')";
    pdo_execute($sql);
}
function loadall_comment($idpro)
{
    $sql = "SELECT * FROM comment WHERE idProduct = '$idpro' ORDER BY idComment desc limit 0,8";
    $listcmt= pdo_query($sql);
    return $listcmt;
}
function load_allcomment(){
    $sql ="SELECT * FROM comment where 1";
    $listcmt=pdo_query($sql);
    return $listcmt;
}

function delete_cm($id)
{
    $sql = "DELETE FROM `comment` WHERE idComment = " . $_GET['id'];
    pdo_execute($sql);

}
?>