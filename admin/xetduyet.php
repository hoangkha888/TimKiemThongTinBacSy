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
                    <!-- <td><?php  echo $row['id']; ?></td> -->
                    <td><textarea style="border: none"  name="id" rows="2" cols="2" class="form-control"><?php echo $row['id'] ?></textarea></td>

                    <td><textarea style="border: none"  name="hoten" rows="3" cols="30" class="form-control"><?php echo $row['hoten'] ?></textarea></td>
                    <!-- <td><input type="text" class="form-control" name="hoten" value="<?php echo $row['hoten'] ?>"></td> -->
                    <td><textarea style="border: none"  name="ngaysinh" rows="3" cols="30" class="form-control"><?php echo $row['ngaysinh'] ?></textarea></td>
                    <!-- <td><input type="text" class="form-control" name="ngaysinh" value="<?php echo $row['ngaysinh'] ?>"></td> -->
                    <!-- <td><input type="text" class="form-control" name="gioitinh" value="<?php echo $row['gioitinh'] ?>"></td> -->
                    <td><textarea style="border: none"  name="gioitinh" rows="3" cols="30" class="form-control"><?php echo $row['gioitinh'] ?></textarea></td>

                    <td><textarea style="border: none"  name="cccd" rows="3" cols="30" class="form-control"><?php echo $row['cccd'] ?></textarea></td>

                    <!-- <td><input type="text" class="form-control" name="cccd" value="<?php echo $row['cccd'] ?>"></td> -->
                    <!-- <td><input type="text" class="form-control" name="diachi" value="<?php echo $row['diachi'] ?>"></td> -->
                    <td><textarea style="border: none"  name="diachi" rows="3" cols="40" class="form-control"><?php echo $row['diachi'] ?></textarea></td>

                    <!-- <td><input type="text" class="form-control" name="sdt" value="<?php echo $row['sdt'] ?>"></td> -->
                    <td><textarea style="border: none"  name="sdt" rows="3" cols="30" class="form-control"><?php echo $row['sdt'] ?></textarea></td>


                    <!-- <td><input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>"></td> -->
                    <td><textarea style="border: none"  name="email" rows="3" cols="40" class="form-control"><?php echo $row['email'] ?></textarea></td>

                    <!-- <td><input type="text" class="form-control" name="noilamviec" value="<?php echo $row['noilamviec'] ?>"></td> -->
                    <td><textarea style="border: none"  name="noilamviec" rows="2" cols="45" class="form-control"><?php echo $row['noilamviec'] ?></textarea></td>

                    <!-- <td><input type="text" class="form-control" name="thamnien" value="<?php echo $row['thamnien'] ?>"></td> -->
                    <td><textarea style="border: none"  name="thamnien" rows="1" cols="3" class="form-control"><?php echo $row['thamnien'] ?></textarea></td>

                    <!-- <td><input type="text" class="form-control" name="quatrinhcongtac" value="<?php echo $row['quatrinhcongtac'] ?>"></td> -->
                    <td><textarea style="border: none"  name="quatrinhcongtac" rows="3" cols="50" class="form-control"><?php echo $row['quatrinhcongtac'] ?></textarea></td>

                    <!-- <td><input type="text" class="form-control" name="thanhtich" value="<?php echo $row['thanhtich'] ?>"></td> -->
                    <td><textarea style="border: none"  name="thanhtich" rows="3" cols="50" class="form-control"><?php echo $row['thanhtich'] ?></textarea></td>

                    <td>
                        <form action="./code.php" method="post">
                            <input type="text" name="duyet_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="duyet_btn" class="btn btn-success">Duyệt</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="xddelete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="xddelete_btn" class="btn btn-danger"> Xóa</button>
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