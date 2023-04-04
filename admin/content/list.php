<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=add_content">Thêm content</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Detail</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        
                            <th>STT</th>
                            <th>Title</th>
                            <th>Detail</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $stt = 1;
                            $list_contnet=list_content();
                         foreach ($list_contnet as $ct):extract($ct)  ?>
                            <tr>
                                <td><?=$stt++?></td>
                                <td><?=$title?></td>
                                <td><?=$detail?></td>
                                <td><img src="../image/<?=$image?>" width="100" alt=""></td>
                                <td>
                                    <a href="index.php?sp=fix_content&id=<?=$id?>">Sửa</a>
                                    <a href="index.php?sp=delete_content&id=<?=$id?>">Xóa</a>
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