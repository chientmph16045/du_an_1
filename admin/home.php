<?php 
foreach ($listsp as $sp): 
    extract($sp);
    $thongbao ='';
    if($quantity < 10 ){
        $thongbao = "Hiện tại có các đơn hàng đang sắp hết : \n ".$namePro."".$quantity."";
    }
?>
<script>alert(<?=$thongbao?>)</script>
<?php endforeach?>
