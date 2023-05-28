<?php 
    require 'dbconnect.php';
    include ('security.php');

    //insert Admin
    if(isset($_POST['registerbtn']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmpassword'];
        $usertype = $_POST['usertype'];
    
        if($password === $confirm_password)
        {
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password', '$usertype')";
            $query_run = mysqli_query($connection, $query);
            // <!-- kiểm tra xem mật khẩu và nhập lại mk đa giống nhau chưa -->
            if($query_run)
            {
                echo "done";
                $_SESSION['success'] =  "Admin is Added Successfully";
                header('Location: register.php');
            }
            else 
            {
                echo "not done";
                $_SESSION['status'] =  "Admin is Not Added";
                header('Location: register.php');
            }
        }
        else 
        {
            echo "pass no match";
            $_SESSION['status'] =  "Password and Confirm Password Does not Match";
            header('Location: register.php');
        }
    
    }

    // update Admin

    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $usertypeupdate = $_POST['update_usertype'];

        $query = "UPDATE register SET username='$username', email='$email', password='$password',usertype='$usertypeupdate' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: register.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code'] = "error";
            header('Location: register.php'); 
        }
    }

    // delete Admin
    if(isset($_POST['delete_btn']))
    {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM register WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: register.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETED";       
            $_SESSION['status_code'] = "error";
            header('Location: register.php'); 
        }    
    }

    //login Admin
    if(isset($_POST['login_btn']))
    {
        $email_login = $_POST['emaill']; 
        $password_login = $_POST['passwordd']; 
        $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
        $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
    } 
    else
    {
            $_SESSION['status'] = "Email / Password is Invalid";
            header('Location: login.php');
    }
        
    }

    // logout

    if(isset($_POST['logout_btn']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header('Location: login.php');
    }

    // insert chuyên khoa
    if(isset($_POST['themchuyenkhoabtn']))
    {
        $tenchuyenkhoa = $_POST['tenchuyenkhoa'];
        $mota = $_POST['mota'];
    
        $query = "INSERT INTO chuyenkhoa (tenchuyenkhoa, mota) VALUES ('$tenchuyenkhoa','$mota')";
        $query_run = mysqli_query($connection, $query);
        // <!-- kiểm tra xem mật khẩu và nhập lại mk đa giống nhau chưa -->
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: qlchuyenkhoa.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: qlchuyenkhoa.php');
        }
    }

    // update chuyên khoa
    if(isset($_POST['chuyenkhoaupdatebtn']))
    {
        $id = $_POST['edit_id'];
        $tenchuyenkhoa = $_POST['edit_tenchuyenkhoa'];
        $mota = $_POST['edit_mota'];

        $query = "UPDATE chuyenkhoa SET tenchuyenkhoa='$tenchuyenkhoa', mota='$mota' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: qlchuyenkhoa.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code'] = "error";
            header('Location: qlchuyenkhoa.php'); 
        }
    }
    //delete chuyên khoa

    if(isset($_POST['chuyenkhoadelete_btn']))
    {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM chuyenkhoa WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: qlchuyenkhoa.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETED";       
            $_SESSION['status_code'] = "error";
            header('Location: qlchuyenkhoa.php'); 
        }    
    }

    //insert bác sĩ
    if(isset($_POST['adddoctorbtn']))
    {
        $id = $_POST['add_id'];
        $hoten = $_POST['add_hoten'];
        $ngaysinh = $_POST['add_ngaysinh'];
        $gioitinh = $_POST['add_gioitinh'];
        $cccd = $_POST['add_cccd'];
        $diachi = $_POST['add_diachi'];
        $sdt = $_POST['add_sdt'];
        $email = $_POST['add_email'];
        $noilamviec = $_POST['add_noilamviec'];
        $thamnien = $_POST['add_thamnien'];
        $quatrinhcongtac = $_POST['add_quatrinhcongtac'];
        $thanhtich = $_POST['add_thanhtich'];
    
        if(isset($hoten))
        {
            $query = "INSERT INTO doctor (hoten, ngaysinh, gioitinh, cccd, diachi, sdt, email, noilamviec, thamnien, quatrinhcongtac, thanhtich)
            VALUES ('$hoten','$ngaysinh', '$gioitinh', '$cccd', '$diachi', '$sdt', '$email', '$noilamviec', '$thamnien', '$quatrinhcongtac', '$thanhtich')";
            $query_run = mysqli_query($connection, $query);


            $_SESSION['success'] =  "Added Successfully";
            header('Location: qlbacsi.php');
        }
        else 
        {
            echo "pass no match";
            $_SESSION['status'] =  "Erorr !";
            header('Location: qlbacsi.php');
        }
    
    }

    // update bac si
    if(isset($_POST['bacsiupdatebtn']))
    {
        $id = $_POST['edit_id'];
        $hoten = $_POST['edit_hoten'];
        $ngaysinh = $_POST['edit_ngaysinh'];
        $gioitinh = $_POST['edit_gioitinh'];
        $cccd = $_POST['edit_cccd'];
        $diachi = $_POST['edit_diachi'];
        $sdt = $_POST['edit_sdt'];
        $email = $_POST['edit_email'];
        $noilamviec = $_POST['edit_noilamviec'];
        $thamnien = $_POST['edit_thamnien'];
        $quatrinhcongtac = $_POST['edit_quatrinhcongtac'];
        $thanhtich = $_POST['edit_thanhtich'];

        $query = "UPDATE doctor SET hoten='$hoten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', cccd='$cccd', diachi='$diachi', sdt='$sdt', email='$email', noilamviec='$noilamviec', thamnien='$thamnien', quatrinhcongtac='$quatrinhcongtac', thanhtich='$thanhtich' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: qlbacsi.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code'] = "error";
            header('Location: qlbacsi.php'); 
        }
    }


    //delete bac si

    if(isset($_POST['bacsidelete_btn']))
    {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM doctor WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: qlbacsi.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETED";       
            $_SESSION['status_code'] = "error";
            header('Location: qlbacsi.php'); 
        }    
    }



    //xét duyệt

    if(isset($_POST['duyet_btn']))
    {
        $id = $_POST['duyet_id'];
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $gioitinh = $_POST['gioitinh'];
        $cccd = $_POST['cccd'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $noilamviec = $_POST['noilamviec'];
        $thamnien = $_POST['thamnien'];
        $quatrinhcongtac = $_POST['quatrinhcongtac'];
        $thanhtich = $_POST['thanhtich'];

        if(!empty($id)){
            $query = "INSERT INTO doctor (hoten, ngaysinh, gioitinh, cccd, diachi, sdt, email, noilamviec, thamnien, quatrinhcongtac, thanhtich)
            VALUES ('$hoten','$ngaysinh', '$gioitinh', '$cccd', '$diachi', '$sdt', '$email', '$noilamviec', '$thamnien', '$quatrinhcongtac', '$thanhtich')";
            $query_run = mysqli_query($connection, $query);
        }else{
            echo "<h2>du lieu rong</h2>";
        }

        if($query_run)
        {
                $query1 = "DELETE FROM xetduyet
                                WHERE id='$id' ";
                $run = mysqli_query($connection, $query1);
                header('Location: xetduyet.php');
        }
        else 
        {
            echo "not done";
        }
    }


    if(isset($_POST['xddelete_btn']))
    {
        $id = $_POST['xddelete_id'];

        $query = "DELETE FROM xetduyet WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: xetduyet.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETED";       
            $_SESSION['status_code'] = "error";
            header('Location: xetduyet.php'); 
        }    
    }

?>