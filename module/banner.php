<?php

function insert_banner($title,$s_title,$description,$image)
{
    $sql = "INSERT INTO `banner`(`title`,`s_title`,`description`,`image`)  values ('$title','$s_title','$description','$image') ";
    pdo_execute($sql);
}




function list_banner(){
    $sql = "SELECT * FROM `banner`";
    $listbanner = pdo_query($sql);
    return $listbanner;
}

function update_banner($id,$title,$s_title,$description,$image){
   if ($image!='') {
    $sql = "UPDATE `banner` set `title`='".$title."', `s_title`='".$s_title."', `description`='".$description."',`image`='".$image."' WHERE `banner`.`id`=".$id;
   }else {
    $sql = "UPDATE `banner` set `title`='".$title."', `s_title`='".$s_title."', `description`='".$description."' WHERE `banner`.`id`=".$id;
   }
    
   
    
   
    pdo_execute($sql);
}

function load_one_banner($id){
    $sql = "SELECT * FROM `banner` WHERE id = ".$_GET['id'];
    $banner = pdo_query_one($sql);
    return $banner;
}

function delete_banner($id){
    $sql = "DELETE FROM `banner` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}


?>