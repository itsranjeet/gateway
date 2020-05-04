<?php
$con= mysqli_connect('localhost','root','','systemtest');
if($con==false)
{
	die ("Wrong Connection");
}
else
{
	echo "correct";
}

?>