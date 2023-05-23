<?php
include ('security.php');
include('includes/header.php'); 
include('includes/navbar.php');
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Profile </h6>
  </div>

  <div class="card-body">
        
    <?php
    require 'dbconnect.php';
    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];
        
        $query = "SELECT * FROM doctor WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
    ?>

        <form action="code.php" method="POST">

            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2 class="mb-2 text-center text-success">Thông tin cá nhân</h2>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" name="edit_hoten" value="<?php echo $row['hoten'] ?>">
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <input type="text" class="form-control" name="edit_ngaysinh" value="<?php echo $row['ngaysinh'] ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <input type="text" class="form-control" name="edit_gioitinh" value="<?php echo $row['gioitinh'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Thâm niên</label>
                                    <input type="text" class="form-control" name="edit_thamnien" value="<?php echo $row['thamnien'] ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số CCCD</label>
                                    <input type="text" class="form-control" name="edit_cccd" value="<?php echo $row['cccd'] ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="edit_sdt" value="<?php echo $row['sdt'] ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="edit_email" value="<?php echo $row['email'] ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="edit_diachi" value="<?php echo $row['diachi'] ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nơi làm việc</label>
                                    <input type="text" class="form-control" name="edit_noilamviec" value="<?php echo $row['noilamviec'] ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quá trình công tác</label>
                                    <textarea name="edit_quatrinhcongtac" rows="4" cols="50" class="form-control"><?php echo $row['quatrinhcongtac'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="zIp">thành tích</label>
                                    <textarea name="edit_thanhtich" rows="4" cols="50" class="form-control"><?php echo $row['thanhtich'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-center">
                                    <a href="qlbacsi.php" class="btn btn-danger"> CANCEL </a>
                                    <button type="submit" name="bacsiupdatebtn" class="btn btn-success">Cập nhật </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
    <?php
        }
    }
    ?>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>