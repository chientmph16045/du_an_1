<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=add_user">Add new</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Number phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stt=1;
                        foreach($listuser as $dm):extract($dm) ?>
                        <tr>
                            <td><?=$stt++?></td>
                            <td><?=$nameUser?></td>
                            <td><?=$address?></td>
                            <td><?=$email?></td>
                            <td><?=$phone?></td>
                            <td>
                                <a href="index.php?sp=fix_user&id=<?=$idUser?>">Edit</a>/
                                <a href="index.php?sp=delete_user&id=<?=$idUser?>">Delete</a>
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

<!-- End of Main Content -->

