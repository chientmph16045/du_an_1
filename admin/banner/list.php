<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=add_banner">Thêm Banner</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>S_Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>S_Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                    </tfoot>
                    <tbody>
                        <?php $stt = 1;
                        
                         foreach ($list_banner as $banner):extract($banner)  ?>
                            <tr>
                                <td><?=$stt++?></td>
                                <td><?=$title?></td>
                                <td><?=$s_title?></td>
                                <td><?=$description?></td>
                                <td><img src="../image/<?=$image?>" width="100" alt=""></td>
                                <td>
                                    <a href="index.php?sp=fix_banner&id=<?=$id?>">Sửa</a>
                                    <a href="index.php?sp=delete_banner&id=<?=$id?>">Xóa</a>
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