<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Products</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=add_sp">Add new product</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>
                                <form action="index.php?sp=spcl" method="post">
                                    <select name="loaisp" class="border-0" id="">

                                        <option value="0" selected>Type</option>
                                        <?php foreach ($listdm as $dm):
                                            extract($dm) ?>
                                            <option value="<?= $idCategory ?>"><?= $name ?></option>
                                        <?php endforeach ?>

                                    </select>
                                    <input type="submit" class="border-0" name="tim" value="search" id="">
                                </form>
                            </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stt = 1; foreach ($listsp as $sp):
                            extract($sp);

                            ?>
                            <tr>
                                <td>
                                    <?= $stt++ ?>
                                </td>
                                <td>
                                    <?= $namePro ?>
                                </td>
                                <td>
                                    <?= $price ?>
                                </td>
                                <td><img src="../image/<?= $image ?>" width="100" alt=""></td>
                                <td>
                                    <?= $description ?>
                                </td>
                                <td>
                                    <?= $quantity ?>
                                </td>
                                <td>
                                    <?= $idCate ?>
                                <td>
                                    <a href="index.php?sp=fix_sp&id=<?= $idProduct ?>">Edit</a>/
                                    <a href="index.php?sp=delete_sp&id=<?= $idProduct ?>">Delete</a>
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