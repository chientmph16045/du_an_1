<?php

function insert_content($title,$detail,$image)
{
    $sql = "INSERT INTO `content`(`title`,`detail`,`image`)  values ('$title','$detail','$image') ";
    pdo_execute($sql);
}




function list_content(){
    $sql = "SELECT * FROM `content`";
    $listcontent = pdo_query($sql);
    return $listcontent;
}




function update_content($id,$title,$detail,$image){
   if ($image!='') {
    $sql = "UPDATE `content` set `title`='".$title."', `detail`='".$detail."', `image`='".$image."' WHERE `content`.`id`=".$id;
    
   }else {
    $sql = "UPDATE `content` set `title`='".$title."', `detail`='".$detail."' WHERE `content`.`id`=".$id;
   }
    pdo_execute($sql);
}

function load_one_content($id){
    $sql = "SELECT * FROM `content` WHERE id = ".$_GET['id'];
    $content = pdo_query_one($sql);
    return $content;
}

function delete_content($id){
    $sql = "DELETE FROM `content` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}



?>