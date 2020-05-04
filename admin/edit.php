
       <?php session_start();

if(!$_SESSION['userid'])
       {
        header("location:index.php");
       }
       else
       {
        if($_SESSION['role']=="admin")
        {
          
          include("include/header.php");
include("include/navbar.php");
include("connection.php");


       ?>



    
    

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">11 New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">123 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

         <?php 
         $id=$_GET['edit'];
         $query="select * from login where id='$id'";
         $result=mysqli_query($conn,$query);
         $edit_array=mysqli_fetch_array($result);
         $userid=$edit_array[1];
         $password=$edit_array[2];
         $role=$edit_array[3];
         $chat_page=$edit_array[4];
         $table_page=$edit_array[5];
         $admin_access_page=$edit_array[6];
         ?>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="post" name="updform" action="#">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
     <tr><td>Id</td><td><input type="text"  name="id" value="<?php echo $id; ?>"></td></tr>
                
      <tr><td>Userid</td><td><input type="text"  name="userid" value="<?php echo $userid; ?>"></td></tr>
      <tr><td>Password</td><td><input type="text"  name="password" value="<?php echo $password; ?>"></td></tr>
      <tr><td>Role</td><td><input type="text"  name="role" value="<?php echo $role; ?>"></td></tr>
  <tr><td>chat_page</td><td><input type="text"  name="chat_page" value="<?php echo $chat_page; ?>"></td></tr>
      <tr><td>table_page</td><td><input type="text"  name="table_page" value="<?php echo $table_page; ?>"></td></tr>
       <tr><td>admin_access_page</td><td><input type="text"  name="admin_access_page" value="<?php echo $admin_access_page; ?>"></tr>
       <tr><td></td><td><button class="btn btn-primary btn-block" name="update">Update</button></tr>
                                   
                  </thead>
                </table>
                </form>
      <?php 
            if(isset($_POST['update']))
            {
              //echo "<script>alert('call');</script>";
              $u_id=$_POST['id'];
              $u_userid=$_POST['userid'];
         $u_password=$_POST['password'];
         $u_role=$_POST['role'];
         $u_chat_page=$_POST['chat_page'];
         $u_table_page=$_POST['table_page'];
         $u_admin_access_page=$_POST['admin_access_page'];
 $update_query="UPDATE login SET `userid`='$u_userid',`password`='$u_password',`role`='$u_role',`chat`='$u_chat_page',`table`='$u_table_page',`admin_access`='$u_admin_access_page' where `id`='$u_id'";
echo $update_query;
 $upd_result=mysqli_query($conn,$update_query);
// echo $upd_result;
 if($upd_result)

 {
  //header("location:admin_access.php");
  echo "<script>window.open('admin_access.php','_self')</script>";
 }
 else{
  echo "<script>alert('not updated');</script>";
 }
            
}




      ?>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

       
<?php
include("include/footer.php");
 }
 else
 {

  header("location:dashboard.php");
  die();
 }
       }
       ?>