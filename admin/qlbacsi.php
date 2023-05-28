<?php
  include ('security.php');
  include('includes/header.php'); 
  include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Quản lý danh sách bác sĩ  
          <div class="addbs" style="display: flex; ">
            <form action="xetduyet.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="edit_btn" class="btn btn-success"> xét duyệt</button>
            </form>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#adddoctor" style="margin-left :10px;">
              Thêm bác sĩ
            </button>
          </div>
      </h3>
  </div>

  <div class="card-body">
    <div class="table-responsive">

      <?php
        require 'dbconnect.php';
        $query = "SELECT * FROM doctor";
        $query_run = mysqli_query($connection, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Họ và tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>CCCD</th>
            <th>Địa chỉ</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Nơi công tác</th>
            <th>Thâm niên</th>
            <th>Quá trình công tác</th>
            <th>Thành tích</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
  
          <?php
            if(mysqli_num_rows($query_run) > 0)        
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
            ?>
                <tr>
                    <td><?php  echo $row['id']; ?></td>
                    <td><?php  echo $row['hoten']; ?></td>
                    <td><?php  echo $row['ngaysinh']; ?></td>
                    <td><?php  echo $row['gioitinh']; ?></td>
                    <td><?php  echo $row['cccd']; ?></td>
                    <td><?php  echo $row['diachi']; ?></td>
                    <td><?php  echo $row['sdt']; ?></td>
                    <td><?php  echo $row['email']; ?></td>
                    <td><?php  echo $row['noilamviec']; ?></td>
                    <td><?php  echo $row['thamnien']; ?></td>
                    <td><?php  echo $row['quatrinhcongtac']; ?></td>
                    <td><?php  echo $row['thanhtich']; ?></td>
                    <td>
                        <form action="bacsi_edit.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="bacsidelete_btn" class="btn btn-danger"> DELETE</button>
                        </form>
                    </td>
                </tr>
            <?php
                } 
            }
            else {
                echo "No Record Found";
            }
          ?>

        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- modal thêm bác sĩ -->
<div class="modal fade" id="adddoctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Acount</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

            <div class="col-xl-12 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2 class="mb-2 text-center text-success">Thông tin cá nhân</h2>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="add_id" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" name="add_hoten" >
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <input type="text" class="form-control" name="add_ngaysinh" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <input type="text" class="form-control" name="add_gioitinh" >
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Thâm niên</label>
                                    <input type="text" class="form-control" name="add_thamnien" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số CCCD</label>
                                    <input type="text" class="form-control" name="add_cccd" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="add_sdt" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="add_email" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="add_diachi" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nơi làm việc</label>
                                    <input type="text" class="form-control" name="add_noilamviec" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quá trình công tác</label>
                                    <textarea name="add_quatrinhcongtac" rows="4" cols="50" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="zIp">thành tích</label>
                                    <textarea name="add_thanhtich" rows="4" cols="50" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-center">
                                    <a href="qlbacsi.php" class="btn btn-danger"> Thoát </a>
                                    <button type="submit" name="adddoctorbtn" class="btn btn-primary">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

    </div>
  </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>