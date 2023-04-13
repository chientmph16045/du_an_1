<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Đơn hàng</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=add_user">Thêm mới user</a></h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align:center">STT</th>
                            <th style="text-align:center">Mã đơn hàng</th>
                            <th style="text-align:center">Tên khách hàng</th>
                            <th style="text-align:center">Địa chỉ</th>
                            <th style="text-align:center">Số điện thoại</th>
                            <th style="text-align:center">Tình trạng đơn</th>
                            <th style="text-align:center">Tên sản phẩm</th>
                            <th style="text-align:center">Số lượng</th>
                            <th style="text-align:center">Thay đổi trạng thái đơn hàng</th>
                            <th style="text-align:center">Mức giá</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
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
                    </tfoot> -->
                    <tbody>
                        <?php $stt = 1;
                        foreach ($listkh as $kh):
                            extract($kh);
                            $tong = $quantity * $price;
                            ?>
                            <tr>
                                <td>
                                    <?= $stt++ ?>
                                </td>
                                <td>
                                    <?= $idCart ?>
                                </td>
                                <td>
                                    <?= $nameUser ?>
                                </td>
                                <td style="width:120px">
                                    <?= $address ?>
                                </td>
                                <td>
                                    <?= $phone ?>
                                </td>
                                <td>
                                    <?= $nameStatus ?>
                                </td>
                                <td>
                                    <?= $namePro ?>
                                </td>
                                <td>
                                    <?= $quantity ?>
                                </td>
                                <td>
                                    <?php
                                    if ($tinhtrang == 0 || $tinhtrang == 4) {

                                        $thongbao = '';
                                        if ($tinhtrang == 0) {
                                            $thongbao = 'Hủy hàng thành công';

                                        }
                                        if ($tinhtrang == 4) {
                                            $thongbao = 'Giao hàng thành công';
                                        }
                                        ?>
                                        <span>
                                            <?= $thongbao ?>
                                        </span>
                                        <?php
                                    } else {
                                        ?>
                                        <form action="?sp=chang_status&id=<?= $idCart ?>" method="post">
                                            <select name="changest" class="border-0" id="">
                                                <option value="0" selected>Thay đổi tình trạng</option>
                                                <?php foreach ($listst as $dm):
                                                    extract($dm) ?>
                                                    <option value="<?= $idStatus ?>"><?= $nameStatus ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <input type="hidden" name="idsp" value="<?= $idSp ?>" id="">
                                            <input type="hidden" name="slsp" value="<?= $slsp ?>" id="">
                                            <input type="hidden" name="soluong" value="<?= $quantity ?>" id="">
                                            <input type="submit" class="border-0" name="change" value="change" id="">
                                        </form>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $tong ?>

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