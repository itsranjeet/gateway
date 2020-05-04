<?php session_start();

if(!$_SESSION['userid'])
       {
        header("location:index.php");
       }
       else
       {
        if($_SESSION['table_page']=="yes")
        {
          include("include/header.php");
include("include/navbar.php");

          include("connection.php");

       ?>




       
       <?php 
include("include/footer.php");
 }
 else
 {
  header("location:Dashboard.php");
 }
       }
       ?> 