
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add new user</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="index.php?sp=list_user">List user</a></h6>
        </div>
        <div class="card-body">
            <div class="">
                   
<form class="row g-3" enctype="multipart/form-data" method="post" name="myForm" onsubmit="return validateForm()">
  <div class="col-6">
    <label for="inputAddress" class="form-label">User name</label>
    <input type="text" class="form-control" id="name" required placeholder="Name ..." name="name">
    <?php if (isset($thongbao)) {
            echo '<span id="error" style="color:red;">'.$thongbao.'</span>';
          } ?>
    
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Phone</label>
    <input type="number" class="form-control" required id="phone" name="phone">
    <?php if (isset($thongbao1)) {
            echo '<span id="error" style="color:red;">'.$thongbao1.'</span>';
          } ?>
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" required id="email" name="email">
    <?php if (isset($thongbao2)) {
            echo '<span id="error" style="color:red;">'.$thongbao2.'</span>';
          }elseif(isset($thongbaodangki)){
            echo '<span id="error" style="color:red;">'.$thongbaodangki.'</span>';
          } ?>
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" required id="password" name="password">
    <?php if (isset($thongbao3)) {
            echo '<span id="error" style="color:red;">'.$thongbao3.'</span>';
          } ?>
  </div>
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" required placeholder="Apartment, studio, or floor" name="address">
    <?php if (isset($thongbao4)) {
            echo '<span id="error" style="color:red;">'.$thongbao4.'</span>';
          } ?>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="new_user">Add new</button>
  </div>
  
</form>
                        
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- /.container-fluid -->


<!-- End of Main Content -->
