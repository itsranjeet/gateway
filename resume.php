<?php
<?php
include('config.php');
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$query=mysqli_query($con,"INSERT INTO data(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
	if($query==true)
	{
		?>
		<script type="text/javascript">
			
			alert('data inserted sauccessfully');
			window.location.href='action.php';

		</script>

		<?php
	}
		else
		{
			?>
			<script type="text/javascript">
				alert('error');
				window.location.href='insert.php';

			</script>
			<?php
		}
	}



?>





?>

<!DOCTYPE html>
<html>
<head>
	
	<title>resume</title>
</head>
<body bgcolor="">
	<center>
		
		<form action="" method="post" enctype="multipart/form-data">
			NAME : <input type="text" name="Name" required="" placeholder="enter ur name">
			<br>
			<br>

			CONTACT NUMBER: <input type="number" name="cnum"  required="" placeholder="enter ur number"> <br><br>
			EMAIL ID: <input type="email" name="email" id="email" placeholder="enter ur email id"><br><br>
			Qualification: <input type="text" name="qualification" required="" placeholder="enter ur name">
			<br>
			<br>
			FILE: <input type="file" name="photo" id="photo">
			<br>
			<br>
			
			  Any Experience: <input type="number" name="quantity"  min="0" max="15">
			  <br>
			  <br>

			<input type="Submit" name="Submit" value="Register">
			<input type="reset" name="reset" value="Reset"> 




		</form>
	</center>


</body>
</html>