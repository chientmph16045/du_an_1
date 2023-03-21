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
            <div class="table-responsive">
                <form action="index.php?sp=fix_done_dm" method="post">
                    <h6 class="m-0 font-weight-bold text-primary">Tên danh mục</h6>
                    <input type="text" class="form-control bg-light border-0 small" value="<?=
                         $name ?>" name="danhmuc" aria-label="Search" aria-describedby="basic-addon2">
                        <input type="hidden" name="id" value="<?= $idCategory ?>" id="">
                    <button type="submit" name="fix">Sửa</button>
                </form>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->