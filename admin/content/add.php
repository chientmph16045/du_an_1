<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=list_content">Danh sách nội dung content</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                   
                    <form action="index.php?sp=add_content" method="post" enctype="multipart/form-data">
                        <h6 class="m-0 font-weight-bold text-primary">Title :</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="title" placeholder="Tiêu đề ..."
                            aria-label="Search" aria-describedby="basic-addon2">

                            <h6 class="m-0 font-weight-bold text-primary">Detail :</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="detail" placeholder="Mô tả ..."
                            aria-label="Search" aria-describedby="basic-addon2">

                            <h6 class="m-0 font-weight-bold text-primary">Image :</h6>
                        <input type="file" class="form-control bg-light border-0 small" name="image" 
                            aria-label="Search" aria-describedby="basic-addon2">

                        <button class="mt-2" type="submit" name="new_content">Thêm mới</button>
                    </form>
                        
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->