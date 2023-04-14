<?php 
// if($_SERVER['REQUEST_METHOD']== "POST"){
//     if(empty($_POST['danhmuc'])){
//         $thongbao="Bạn cần nhập danh mục";
//     }else{
        
//     }
// }
// ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add new</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=list_dm">List type</a></h6>
        </div>
        <div class="card-body">
            <div class="">
                    <form action="index.php?sp=add_dm" method="post" class="row g-3" name="myForm" onsubmit="return validateForm1()">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" name="danhmuc">
                            <span style="color:red" id="error"> </span>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit" name="new">Add new</button>
                        </div>
                    </form>
                        
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

<script>
    function validateForm1(){
        let x = document.forms["myForm"]["danhmuc"].value;
        if (x == "") {
            document.getElementById("error").innerHTML = "không được để trống";
            return false;
        }else{
            alert("thêm mới thành công");
            location.href = '/du_an_1/admin/index.php?sp=list_dm';
            return true; 
            
            // console.log(location.href);
            
        }
    }
</script>
<!-- End of Main Content -->