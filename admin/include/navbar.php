
<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- previledge admin start -->
        <?php if($_SESSION['admin_access_page']=="yes")
            {
              ?>

         <li class="nav-item">
          <a class="nav-link" href="admin_access.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Admin access</span></a>
        </li>
      <?php } ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
            <?php if($_SESSION['chat_page']=="yes")
            {
              ?>
        
        <li class="nav-item">
          <a class="nav-link" href="chats.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
      <?php 
    } 
        if($_SESSION['table_page']=="yes")
            {
              ?>

        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
        <?php } 

         if($_SESSION['table_page']=="yes")
            {
              ?>

        <li class="nav-item">
          <a class="nav-link" href="https://dashboard.tawk.to/login" target="_blank">
            <i class="fas fa-fw fa-table"></i>
            <span>Live Chat</span></a>
        </li>
        <?php } ?>
          <!-- user menu -->
          
      
      </ul>