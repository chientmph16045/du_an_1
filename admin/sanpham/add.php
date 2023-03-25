<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=list_sp">Danh sách danh mục</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                   
                   
<form action="index.php?sp=add_sp" enctype="multipart/form-data" method="post">
                        <h6 class="m-0 font-weight-bold text-primary">Tên sản phẩm</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="name" 
                            aria-label="Search" aria-describedby="basic-addon2">
                            <h6 class="m-0 font-weight-bold text-primary">Giá</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="price" 
                            aria-label="Search" aria-describedby="basic-addon2">
                            <h6 class="m-0 font-weight-bold text-primary">Hỉnh ảnh</h6>
                        <input type="file" class="form-control bg-light border-0 small" name="image" 
                            aria-label="Search" aria-describedby="basic-addon2">
                            <h6 class="m-0 font-weight-bold text-primary">Mô tả sản phẩm</h6>
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                            
                            <h6 class="m-0 font-weight-bold text-primary">Số lượng sản phẩm</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="quantity" 
                            aria-label="Search" aria-describedby="basic-addon2">
                            <h6 class="m-0 font-weight-bold text-primary">Loại sản phẩm</h6>
                        <select name="idCategory" id="">
                            <?php foreach($listdm as $dm):extract($dm)?>
                            <option value="<?=$idCategory?>"><?=$name?></option>
                            <?php endforeach?>
                        </select>
                        <br>
                        <button  class="mt-2" type="submit" name="new_sp">Thêm mới</button>
                    </form>
                        
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
                        