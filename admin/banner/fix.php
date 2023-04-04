<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=list_banner">Danh sách banner</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                   
                   <?php if(is_array($banner)){extract($banner);}?>
<form action="index.php?sp=fix_done_banner" enctype="multipart/form-data" method="post">

                        <h6 class="m-0 font-weight-bold text-primary">Title</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="title"  value="<?=$title?>"
                            aria-label="Search" aria-describedby="basic-addon2">
                            <h6 class="m-0 font-weight-bold text-primary">small_Title</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="s_title"  value="<?=$s_title?>"
                            aria-label="Search" aria-describedby="basic-addon2">

                            <h6 class="m-0 font-weight-bold text-primary">Description</h6>
                        <input type="text" class="form-control bg-light border-0 small" name="description"  value="<?=$description?>"
                            aria-label="Search" aria-describedby="basic-addon2">
                            
                            <h6 class="m-0 font-weight-bold text-primary">image_banner</h6>
                            
                            <img src="../image/<?=$image?>" width="200" alt="">
                            
                        <input type="file" class="form-control bg-light border-0 small" name="image"  value="<?=$image?>"
                            aria-label="Search" aria-describedby="basic-addon2">
                        
                        <br>
                        <input type="hidden" name="id" value="<?=$id?>" id="">
                        <button  class="mt-2" type="submit" name="fix_banner">Sửa</button>
                    </form>
                        
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->