<?php 
foreach ($listsp as $sp): 
    extract($sp);
    $thongbao ='';
    if($quantity < 10 ){
        $thongbao = "Sản phẩm sắp hết: ".$namePro ;
    }
?>
<script>alert('<?=$thongbao?>')</script>
<?php endforeach?>
