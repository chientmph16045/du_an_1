<?php
    // hàm thêm bình luận 
    function insert_binhluan($content,$idUser,$idProduct,$dateComment){
        $sql="insert into comment(content,idUser,idProduct,dateComment) values('$content','$idUser','$idProduct','$dateComment')";
        
        //hàm thực thi câu lệnh sql
        pdo_execute($sql);
    }

    // load danh sách bình luận
    function loadall_binhluan($idProduct){
        $sql="select * from comment where 1"; 
        if($idProduct>0){
            $sql.=" AND idpro='".$idProducto."'"; 
        }else {
            $sql.=" order by id desc";
        }
        
        $listbinhluan=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listbinhluan;
    }


?>