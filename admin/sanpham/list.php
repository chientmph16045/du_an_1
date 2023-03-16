<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=add_sp">Thêm mới sản phẩm</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Hình</th>
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>
                                <form action="index.php?sp=spcl" method="post">
                                    <select name="loaisp" class="border-0" id="">
                                    <option value="0" selected>Loại sản phẩm</option>
                                        <?php foreach($listdm as $dm):extract($dm)?>
                                            <option value="<?=$idCategory?>"><?=$name?></option>
                                        <?php endforeach?>
                                    </select>
                                    <input type="submit" class="border-0" name="tim" value="search" id="">
                                </form>
                            </th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Hình</th>
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>Loại sản phẩm</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $stt = 1;
                        
                        foreach ($listsp as $sp):
                            extract($sp); ?>
                            <tr>
                                <td>
                                    <?= $stt++ ?>
                                </td>
                                <td>
                                    <?= $name ?>
                                </td>
                                <td>
                                    <?= $price ?>
                                </td>
                                <td><img src="../image/<?= $image ?>" width="100" alt=""></td>
                                <td><?=$description?></td>
                                <td><?=$quantity?></td>
                                <td><?=$idCate?></td>
                                <td>
                                    <a href="index.php?sp=fix_sp&id=<?=$idProduct?>">Sửa</a>
                                    <a href="index.php?sp=delete_sp&id=<?=$idProduct?>">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->