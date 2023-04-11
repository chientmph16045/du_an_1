<!-- Begin Page Content -->
<?php
    if (is_array($dm)) {
        
        extract($dm);
    }
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=list_dm">Danh sách danh mục</a></h6>
        </div>
        <div class="card-body">
            <div class="">
                    <form action="index.php?sp=fix_done_dm" method="post" class="row g-3">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="inputEmail4" name="danhmuc" value="<?=$name ?>">
                            <input type="hidden" name="id" value="<?= $idCategory ?>" id="">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit" name="fix">Update</button>
                        </div>
                    </form>
                        
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->