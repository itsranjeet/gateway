<?php $localhost="localhost";
      $dbuserid="root";
      $dbpassword="";
      $dbname="gateway";

      $conn=mysqli_connect($localhost,$dbuserid,$dbpassword,$dbname);
      if($conn)
      {
      	echo "<script>alert('connect');</script>";

      }
      else
      {
      	die();
      }




?>