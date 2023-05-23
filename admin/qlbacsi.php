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
          <form action="xetduyet.php" method="post">
              <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
              <button type="submit" name="edit_btn" class="btn btn-success"> xét duyệt</button>
          </form>
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

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>