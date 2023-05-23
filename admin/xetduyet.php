<?php
include ('security.php');
include('includes/header.php'); 
include('includes/navbar.php');
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold "><a href="qlbacsi.php" class="btn btn-success">< Trở lại</a></h6>
  </div>

  <div class="card-body">
        
        <form action="code.php" method="POST">
        <?php
            require 'dbconnect.php';
            $query = "SELECT * FROM xetduyet";
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
            <th>Xét duyệt </th>
            <th>Xóa</th>
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
                    <td><input type="text" class="form-control" name="hoten" value="<?php echo $row['hoten'] ?>"></td>
                    <td><input type="text" class="form-control" name="ngaysinh" value="<?php echo $row['ngaysinh'] ?>"></td>
                    <td><input type="text" class="form-control" name="gioitinh" value="<?php echo $row['gioitinh'] ?>"></td>
                    <td><input type="text" class="form-control" name="cccd" value="<?php echo $row['cccd'] ?>"></td>
                    <td><input type="text" class="form-control" name="diachi" value="<?php echo $row['diachi'] ?>"></td>
                    <td><input type="text" class="form-control" name="sdt" value="<?php echo $row['sdt'] ?>"></td>
                    <td><input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>"></td>
                    <td><input type="text" class="form-control" name="noilamviec" value="<?php echo $row['noilamviec'] ?>"></td>
                    <td><input type="text" class="form-control" name="thamnien" value="<?php echo $row['thamnien'] ?>"></td>
                    <td><input type="text" class="form-control" name="quatrinhcongtac" value="<?php echo $row['quatrinhcongtac'] ?>"></td>
                    <td><input type="text" class="form-control" name="thanhtich" value="<?php echo $row['thanhtich'] ?>"></td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="duyet_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="duyet_btn" class="btn btn-success">Duyệt</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="xddelete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="xddelete_btn" class="btn btn-danger"> DELETE</button>
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

            </form>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>