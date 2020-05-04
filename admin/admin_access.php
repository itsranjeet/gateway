<?php session_start();

if(!$_SESSION['userid'])
       {
        header("location:index.php");
       }
       else
       {
        if($_SESSION['admin_access_page']=="yes")
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
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          <h1>Blank Page</h1>
          <hr>
          <p>This is a great starting point for new custom pages.</p>
           <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User Id</th>
                      <th>Password</th>
                      <th>Role</th>
                      <th>chat</th>
                      <th>table</th>
                      <th>admin access</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <?php $query="select * from login";
                        $result=mysqli_query($conn,$query);
                        while($arr=mysqli_fetch_assoc($result))
                        {
                          $id=$arr['id'];
                          $userid=$arr['userid'];
                          $password=$arr['password'];
                          $role=$arr['role'];
                          $chat_page=$arr['chat'];
                          $table_page=$arr['table'];
                          $admin_access_page=$arr['admin_access'];

                 ?>
                  <tbody>
                    <tr>
                      <td><?php echo $userid; ?></td>
                      <td><?php echo $password; ?></td>
                      <td><?php echo $role; ?></td>
                      <td><?php echo $chat_page; ?></td>
                      <td><?php echo $table_page; ?></td>
                      <td><?php echo $admin_access_page; ?></td>
                      <td> <a href="edit.php?edit=<?php echo $id; ?>"><button>Edit</button></a></td>
                      <td><a href="del.php?del=<?php echo $id; ?>"><button>Delete</button></a></td>
                    </tr>
                     </tbody>
                   <?php
                    } 
                    ?>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>


        </div>
        <!-- /.container-fluid -->

        
<?php
include("include/footer.php"); 
 }
 else
 {
  header("location:Dashboard.php");
 }
       }
       ?> 
