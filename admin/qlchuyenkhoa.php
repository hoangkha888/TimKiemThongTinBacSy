<?php
  include ('security.php');
  include('includes/header.php'); 
  include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm chuyên khoa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> tên chuyên khoa </label>
                <input type="text" name="tenchuyenkhoa" class="form-control" placeholder="Nhập tên khoa">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="mota" rows="4" cols="50"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="themchuyenkhoabtn" class="btn btn-primary">Save</button>
        </div>

        <input type="hidden" name="usertype" value="admin">

      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Quản lý chuyên khoa 
            <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Thêm chuyên khoa 
            </button>
    </h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">

      <?php
        require 'dbconnect.php';
        $query = "SELECT * FROM chuyenkhoa";
        $query_run = mysqli_query($connection, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Tên chuyên khoa </th>
            <th>Mô tả </th>
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
                    <td><?php  echo $row['tenchuyenkhoa']; ?></td>
                    <td><?php  echo $row['mota']; ?></td>
                    <td>
                        <form action="chuyenkhoa_edit.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="chuyenkhoaedit_btn" class="btn btn-success"> EDIT</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="chuyenkhoadelete_btn" class="btn btn-danger"> DELETE</button>
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