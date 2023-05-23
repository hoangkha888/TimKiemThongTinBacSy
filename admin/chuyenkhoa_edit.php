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
    if(isset($_POST['chuyenkhoaedit_btn']))
    {
        $id = $_POST['edit_id'];
        
        $query = "SELECT * FROM chuyenkhoa WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
    ?>

        <form action="code.php" method="POST">

            <input type="text" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control">

            <div class="form-group">
                <label> Chuyên khoa </label>
                <input type="text" name="edit_tenchuyenkhoa" value="<?php echo $row['tenchuyenkhoa'] ?>" class="form-control"
                    >
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="edit_mota" rows="4" cols="50" class="form-control"><?php echo $row['mota'] ?></textarea>
            </div>

            <a href="qlchuyenkhoa.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="chuyenkhoaupdatebtn" class="btn btn-primary"> Update </button>

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